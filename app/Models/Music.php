<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'artist',
        'average',
        'video_path',
        'body',
        'review',
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
}
