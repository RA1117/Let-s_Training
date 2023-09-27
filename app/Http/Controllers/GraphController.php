<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\Training;
use App\Models\Body;
use App\Models\Part;

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
    
    public function graph_training_index(Record $record, Training $training, Body $body, Part $part)
    {
        $user = \Auth::user();
        $parts = $part->where('body_id', $body['id'])->get();
        $records = $record->where('user_id', $user['id'])->where('body_id', $body['id'])->whereNotNull('point')->orderby('date', 'DESC')->paginate(7);
        return view('graphs.trainings.index', compact('parts', 'records'))->with(['body' => $body]);
    }
    
    public function graph_training_body(Record $record, Training $training, Body $body, Part $part)
    {
        $user = \Auth::user();
        $parts = $part->where('body_id', $body['id'])->get();
        $records = $record->where('user_id', $user['id'])->where('body_id', $body['id'])->whereNotNull('point')->orderby('date', 'DESC')->paginate(7);
        $a = NULL;
        /*if(!is_array($records) && !empty($records)){
            $a = $records[0]->date;
        }*/
        $point = NULL;
        $i = $records->count()-1;
        return view('graphs.trainings.body', compact('parts', 'records', 'a', 'point', 'i'))->with(['body' => $body]);
    }
    
    public function graph_training_part(Record $record, Training $training, Body $body, Part $part)
    {
        $user = \Auth::user();
        $records = $record->where('user_id', $user['id'])->where('part_name', $part['part_name'])->whereNotNull('point')->orderby('date', 'DESC')->paginate(7);
        $a = NULL;
        /*if(!is_array($records) && !empty($records)){
            $a = $records[0]->date;
        }*/
        $point = NULL;
        $i = $records->count()-1;
        return view('graphs.trainings.part', compact('records', 'a', 'point', 'i'))->with(['part' => $part, 'body' => $body]);
    }
    
    public function run_index(Record $record)
    {
        $user = \Auth::user();
        return view('graphs.runs.index')->with(['records' => $record->getrunPaginateByLimit(7)]);
    }

}
