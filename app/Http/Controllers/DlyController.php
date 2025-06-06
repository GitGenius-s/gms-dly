<?php

namespace App\Http\Controllers;

use App\Models\DlyType;
use Illuminate\Http\Request;

class DlyController extends Controller
{
    public function index()
    {
        // DlyType::query()->get();
        return view('dly.list',[
            'dlyTypes' => DlyType::all()
        ]);
    }
}
