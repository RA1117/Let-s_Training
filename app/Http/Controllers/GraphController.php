<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\Training;

class GraphController extends Controller
{
    
    public function weight_index(Record $record)
    {
        //return view('graphs.weights.show')->with(['records' => $record->getdatePaginateByLimit(7)]);
        return view('graphs.weights.index')->with(['records' => $record->getweightPaginateByLimit(7)]);
    }
    
    public function diet_index(Record $record)
    {
        //return view('graphs.weights.show')->with(['records' => $record->getdatePaginateByLimit(7)]);
        return view('graphs.diets.index')->with(['records' => $record->getdietPaginateByLimit(7)]);
    }
    
    public function graph_training_index(Record $record, Training $training)
    {
        $user = \Auth::user();
        return view('graphs.trainings.index')->with(['records' => $record->where('user_id', $user['id'])->where('training_id', $training['id'])->whereNotNull('point')->orderby('date', 'DESC')->paginate(7)]);
    }
    
    public function graph_training_top(Training $training)
    {
        $user = \Auth::user();
        return view('graphs.trainings.top')->with(['trainings' => $training->gettrainingPaginateByLimit(7)]);
    }
    
    public function run_index(Record $record)
    {
        $user = \Auth::user();
        return view('graphs.runs.index')->with(['records' => $record->getrunPaginateByLimit(7)]);
    }

}
