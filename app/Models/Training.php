<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'training_name',
        'training_weight',
    ];
    
    public function records()
    {
        return $this->HasMany(Record::class);
    }
    
}
