<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalkZoneController extends Controller
{
    public function index()
    {
        return view('map.walk-zone'); // crea resources/views/map/walk-zone.blade.php
    }

    public function store(Request $request)
    {
        $request->validate(['district' => 'required|string|max:255']);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->walk_zone = $request->district;
        $user->save();

        return response()->json(['success' => true, 'message' => 'Zona guardada']);
    }
}
