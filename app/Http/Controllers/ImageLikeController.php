<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageLike;
use Illuminate\Support\Facades\Auth;

class ImageLikeController extends Controller
{
    public function toggle($imageId)
    {
        $user = Auth::user();
        $image = Image::findOrFail($imageId);

        // Buscar si ya existe el like
        $existing = ImageLike::where('user_id', $user->id)
                             ->where('image_id', $image->id)
                             ->first();

        if ($existing) {
            $existing->delete();
            return back()->with('success', 'Like eliminado');
        }

        ImageLike::create([
            'user_id' => $user->id,
            'image_id' => $image->id
        ]);

        return back()->with('success', 'Imagen marcada como me gusta');
    }
}
