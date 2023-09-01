<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\User;
use App\Models\Training;

class RecordController extends Controller
{
    public function index(Record $record, Training $training)
    {
        //$user = \Auth::user();
        //return view('records.index')->with(['records' => $record->where('user_id', $user['id'])->orderby('updated_at', 'DESC')->get()]);
        return view('records.index')->with(['records' => $record->getPaginateByLimit(10), 'trainings' => $training->get()]);
        //return view('records.index')->with(['records' => $record->where('user_id', $user['id'])->orderby('updated_at', 'DESC')->paginate(10)]);
    }
    
    public function show(Record $record, Training $training)
    {
        return view('records.show')->with(['record' => $record, 'trainings' => $training->get()]);
    }
    
    public function create(Training $training)
    {
        $user = \Auth::user();
        $trainings = Training::get();
        return view('records.create', compact('user', 'trainings'));
    }
    
    public function store(Request $request, Record $record)
    {
        $input = $request['record'];
        $record->fill($input)->save();
        return redirect('/records/' . $record->id);
        //return redirect('/records');
    }
    
    public function new_create()
    {
        return view('records.new');
    }
    
    public function new_store(Request $request, Training $training)
    {
        $input = $request['training'];
        $training->fill($input)->save();
        return redirect('/records/create');
        //return redirect('/records');
    }
    
}
