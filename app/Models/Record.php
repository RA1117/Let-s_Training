<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'training_id',
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
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        $user = \Auth::user();
        return  $this->where('user_id', $user['id'])->orderby('updated_at', 'DESC')->paginate($limit_count);
        //$user = \Auth::user();
        //return view('records.index')->with(['records' => $record->where('user_id', $user['id'])->orderby('updated_at', 'DESC')->get()]);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    
}
