<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body_name',
    ];
    
    public function parts()
    {
        return $this->HasMany(Part::class);
    }
    
    public function records()
    {
        return $this->HasMany(Record::class);
    }
    
}
