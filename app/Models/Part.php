<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body_id',
        'part_name',
    ];
    
    public function body()
    {
        return $this->belongsTo(Body::class);
    }
    
    public function trainings()
    {
        return $this->belongsToMany(Training::class);
    }
    
}
