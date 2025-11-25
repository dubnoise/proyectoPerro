<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageLike extends Model
{
    protected $table = 'image_likes'; // Nombre de la tabla

    protected $fillable = [
        'user_id',
        'image_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
