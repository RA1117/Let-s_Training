<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'music_id',
        'user_id',
        'body',
        'review',
        'good',
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('user_id', 'comment_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
