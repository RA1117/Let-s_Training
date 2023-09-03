<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

class GraphController extends Controller
{
    
    public function show(Record $record)
    {
        return view('graphs.show')->with(['records' => $record->getdatePaginateByLimit(7)]);
    }
    
}
