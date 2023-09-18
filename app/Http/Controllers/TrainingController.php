<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Training;

class TrainingController extends Controller
{
    public function index(Training $training, Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Training::query();

        if(!empty($keyword)) {
            $query->where('training_name', 'LIKE', "%{$keyword}%");
        }

        $trainings = $query->whereNotNull('training_name')->paginate(5);
        return view('trainings.index', compact('keyword', 'trainings'));
    }
    
    public function show(Training $training)
    {
        return view('trainings.show')->with(['training' => $training]);
    }
    
}
