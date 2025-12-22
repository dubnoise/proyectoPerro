@extends('layout')

@section('titulo','Selecciona zona')
@section('estilos')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
  #walkMap { width:100%; height:560px; border-radius:12px; box-shadow:0 6px 18px rgba(0,0,0,.12); }
  .zone-info { max-width:1000px; margin:16px auto; display:flex; justify-content:space-between; align-items:center; gap:12px; }
  .btn { padding:10px 14px; border-radius:8px; background:#28a745; color:#fff; border:none; cursor:pointer; }
  .btn[disabled]{ opacity:.5; cursor:not-allowed; }
  .modal { display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); align-items:center; justify-content:center; }
  .modal.show{ display:flex; }
  .modal .box{ background:#fff; padding:20px; border-radius:10px; width:320px; text-align:center; }
</style>
@endsection

@section('contenido')
<header>@include('partials.header')</header>

<main style="max-width:1100px;margin:20px auto;padding:0 16px;">
  <h1>Selecciona tu zona</h1>
  <div id="walkMap"></div>

  <div class="zone-info">
    <div id="selectedZone">Ninguna zona seleccionada</div>
    @auth
      <button id="openModal" class="btn" disabled>Guardar zona</button>
    @else
      <div>Inicia sesión para guardar</div>
    @endauth
  </div>
</main>

<div id="confirmModal" class="modal">
  <div class="box">
    <h3>Confirmar</h3>
    <p id="modalText"></p>
    <div style="margin-top:12px">
      <button id="cancelBtn" class="btn" style="background:#dc3545">Cancelar</button>
      <button id="saveBtn" class="btn" style="background:#28a745">Guardar</button>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const map = L.map('walkMap').setView([40.4168, -3.7038], 6); // centro España
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom:19 }).addTo(map);

  let selectedLayer = null;
  let selectedName = null;

  fetch('/geojson/valencia-simpleto.geojson') // o '-slim' si usaste mapshaper
    .then(r => r.json())
    .then(data => {
      L.geoJSON(data, {
        style: { color:'#333', weight:1, fillOpacity:0.25, fillColor:'#bbb' },
        onEachFeature: (f, layer) => {
          const name = f.properties.nombre || f.properties.name || f.properties.NOMBRE || 'Zona';
          layer.on('mouseover', () => layer.setStyle({ fillOpacity:0.6, fillColor:'#ffd54f' }));
          layer.on('mouseout', () => {
            if (selectedLayer !== layer) layer.setStyle({ fillOpacity:0.25, fillColor:'#bbb' });
          });
          layer.on('click', () => {
            if (selectedLayer) selectedLayer.setStyle({ fillOpacity:0.25, fillColor:'#bbb' });
            selectedLayer = layer;
            layer.setStyle({ fillOpacity:0.7, fillColor:'#4caf50' });
            selectedName = name;
            document.getElementById('selectedZone').textContent = 'Seleccionada: ' + name;
            const openModal = document.getElementById('openModal');
            if(openModal) openModal.disabled = false;
          });
        }
      }).addTo(map);
      map.fitBounds(L.geoJSON(data).getBounds(), { padding:[20,20] });
    })
    .catch(err => console.error('GeoJSON error', err));

  // Modal + guardar (AJAX)
  const openModal = document.getElementById('openModal');
  const confirmModal = document.getElementById('confirmModal');
  const modalText = document.getElementById('modalText');
  const cancelBtn = document.getElementById('cancelBtn');
  const saveBtn = document.getElementById('saveBtn');

  if(openModal){
    openModal.addEventListener('click', () => {
      modalText.textContent = 'Guardar ' + selectedName + ' como tu zona de paseo?';
      confirmModal.classList.add('show');
    });
  }
  if(cancelBtn) cancelBtn.addEventListener('click', () => confirmModal.classList.remove('show'));

  if(saveBtn){
    saveBtn.addEventListener('click', async () => {
      const token = document.querySelector('meta[name="csrf-token"]').content;
      try {
        const res = await fetch("{{ route('map.zone.store') }}", {
          method: 'POST',
          headers: { 'Content-Type':'application/json','X-CSRF-TOKEN': token, 'Accept':'application/json' },
          body: JSON.stringify({ district: selectedName })
        });
        const json = await res.json();
        if(json.success){
          confirmModal.classList.remove('show');
          alert(json.message || 'Zona guardada');
        } else {
          alert('Error guardando');
        }
      } catch(e){ alert('Error en la petición'); console.error(e); }
    });
  }
});
</script>
@endsection
