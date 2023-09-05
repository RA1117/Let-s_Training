<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

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
    
    
}
