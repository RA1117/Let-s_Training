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
        'content',
        'video_id',
    ];
    
    public function records()
    {
        return $this->HasMany(Record::class);
    }
    
    public function parts()
    {
        return $this->belongsToMany(Part::class);
    }
    
    public function gettrainingPaginateByLimit(int $limit_count = 5)
    {
        //$user = \Auth::user();
        return  $this->whereNotNull('training_name')->paginate($limit_count);
    }
    
}
