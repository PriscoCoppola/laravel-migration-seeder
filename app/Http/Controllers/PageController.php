<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class PageController extends Controller
{
    public function index() {
        $holidays = Holiday::paginate(3);

        return view('home', compact('holidays'));
    }
}
