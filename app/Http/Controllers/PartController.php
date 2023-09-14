<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Part;
use App\Models\Training;
use App\Models\Body;

class PartController extends Controller
{
    public function index(Part $part, Training $training, Body $body)
    {
        return view('parts/index')->with(['part' => $part, 'trainings' => $training->get(), 'bodies' => $body->get()]);
    }
}
