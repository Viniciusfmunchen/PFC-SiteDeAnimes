<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    public function posts(){
        $this->belongsToMany(Post::class);
    }

    public function pieces(){
        $this->belongsToMany(Piece::class);
    }
}
