<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Body;
use App\Models\Part;

class BodyController extends Controller
{
    public function index(Body $body)
    {
        return view('bodies/index')->with(['bodies' => $body -> get()]);
    }
    
    public function show(Body $body, Part $part)
    { 
        return view('bodies.show')->with(['body' => $body, 'parts' => $part -> get()]);
    }
    
}
