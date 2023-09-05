<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Training;

class TrainingController extends Controller
{
    public function index(Training $training)
    {
        return view('trainings.index')->with(['trainings' => $training->gettrainingPaginateByLimit()]);
    }
}
