<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index()
    {
        // この部分を実際のデータ取得に置き換えてください。
        $labels = ['January', 'February', 'March', 'April', 'May'];
        $data = [10, 20, 30, 40, 50];

        return view('graph', compact('labels', 'data'));
    }
}
