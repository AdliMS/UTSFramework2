<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = Event::all();

        return view('event', compact('data'));
    }
}