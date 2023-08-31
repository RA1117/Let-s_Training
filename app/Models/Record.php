<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date',
        'training_name',
        'training_weight',
        'time',
        'set',
        'part_name',
        'weight',
        'run_time',
        'run_distance',
        'diet',
        ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
