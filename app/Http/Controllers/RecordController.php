<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\User;

class RecordController extends Controller
{
    public function index(Record $record)
    {
        return view('records.index')->with(['records' => $record->get()]);
    }
    
    public function show(Record $record)
    {
        return view('records.show')->with(['record' => $record]);
    }
    
    public function create()
    {
        $user = \Auth::user();
        return view('records.create', compact('user'));
    }
    
    public function store(Request $request, Record $record)
    {
        $input = $request['record'];
        $record->fill($input)->save();
        //return redirect('/records/' . $record->id);
        return redirect('/records');
    }
    
}
