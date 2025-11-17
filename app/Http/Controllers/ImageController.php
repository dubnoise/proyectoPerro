<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Mostrar todas las imágenes del usuario autenticado.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Image[] $images */
        $images = $user->images()->latest()->get();

        return view('images.index', compact('images'));
    }

    /**
     * Mostrar el formulario para subir una nueva imagen.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Almacenar una nueva imagen en la base de datos y en almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_file' => 'required|image|max:2048',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $imageFile = $request->file('image_file');
        $filename = time() . '_' . $imageFile->getClientOriginalName();

        // Guardar en carpeta public/uploads
        $imageFile->move(public_path('uploads'), $filename);

        /** @var \App\Models\Image $image */
        $image = new Image();
        $image->title = $request->title;
        $image->filename = $filename;
        $image->user_id = $user->id;
        $image->save();

        return redirect()->route('images.index')->with('success', 'Imagen subida correctamente');
    }

    /**
     * Mostrar una imagen específica.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        /** @var \App\Models\Image $image */
        $image = Image::findOrFail($id);

        /** @var \App\Models\User $owner */
        $owner = $image->user;

        return view('images.show', compact('image', 'owner'));
    }

    /**
     * Mostrar el formulario para editar una imagen.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        /** @var \App\Models\Image $image */
        $image = Image::findOrFail($id);

        // Verifica que el usuario autenticado sea el dueño
        if (Auth::id() !== $image->user_id) {
            abort(403);
        }

        return view('images.edit', compact('image'));
    }

    /**
     * Actualizar una imagen existente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        /** @var \App\Models\Image $image */
        $image = Image::findOrFail($id);

        if (Auth::id() !== $image->user_id) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'image_file' => 'nullable|image|max:2048',
        ]);

        $image->title = $request->title;

        if ($request->hasFile('image_file')) {
            // Eliminar archivo anterior
            $oldPath = public_path('uploads/' . $image->filename);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            $imageFile = $request->file('image_file');
            $filename = time() . '_' . $imageFile->getClientOriginalName();
            $imageFile->move(public_path('uploads'), $filename);
            $image->filename = $filename;
        }

        $image->save();

        return redirect()->route('images.index')->with('success', 'Imagen actualizada correctamente');
    }

    /**
     * Eliminar una imagen.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        /** @var \App\Models\Image $image */
        $image = Image::findOrFail($id);

        if (Auth::id() !== $image->user_id) {
            abort(403);
        }

        // Eliminar archivo físico
        $path = public_path('uploads/' . $image->filename);
        if (file_exists($path)) {
            unlink($path);
        }

        $image->delete();

        return redirect()->route('images.index')->with('success', 'Imagen eliminada correctamente');
    }
}
