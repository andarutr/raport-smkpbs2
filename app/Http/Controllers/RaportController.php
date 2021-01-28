<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function index()
    {
        return view('template.auth.raport');
    }
}
