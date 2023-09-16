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
        'video_id',
        'good',
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderby('average', 'DESC')->paginate($limit_count);
    }
    
}
