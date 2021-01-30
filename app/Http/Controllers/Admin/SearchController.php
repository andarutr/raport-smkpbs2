<?php

namespace App\Http\Controllers\Admin;

use App\Raport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function administrasi(Request $request)
    {
        $menu = 'Administrasi';
        $search = $request->search;
        $raport = Raport::where('name','like','%'.$search.'%')
                    ->orWhere('nisn','like','%'.$search.'%')
                    ->orWhere('classroom','like','%'.$search.'%')
                    ->orWhere('status','like','%'.$search.'%')
                    ->paginate(10);

        return view('template.panel.administrasi', compact('menu','raport'));
    }

    public function listRaport(Request $request)
    {
        $menu = 'E-Raport';
        $search = $request->search;
        $raport = Raport::where('name','like','%'.$search.'%')
                    ->orWhere('nisn','like','%'.$search.'%')
                    ->orWhere('classroom','like','%'.$search.'%')
                    ->orWhere('status','like','%'.$search.'%')
                    ->paginate(10);

        return view('template.panel.list_raport', compact('menu','raport'));
    }

    public function kirimRaport(Request $request)
    {
        $menu = 'E-Raport';
        $search = $request->search;
        $raport = Raport::where('name','like','%'.$search.'%')
                    ->orWhere('nisn','like','%'.$search.'%')
                    ->orWhere('classroom','like','%'.$search.'%')
                    ->orWhere('status','like','%'.$search.'%')
                    ->paginate(10);

        return view('template.panel.kirim_raport', compact('menu','raport'));
    }
}
