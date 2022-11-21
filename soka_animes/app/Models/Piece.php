<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    public function posts(){
        $this->belongsToMany(Post::class);
    }

    public function characters(){
        $this->belongsToMany(Characters::class);
    }
}
