<?php

namespace App\Http\Controllers;

use App\Raport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RaportController extends Controller
{
    public function index()
    {
        return view('template.auth.raport');
    }

    public function check(Request $req)
    {
        $this->validate($req, ['nisn' => 'required']);
    	$nisn = $req->nisn;
    	$raport = Raport::where('nisn', $nisn)->first();
        if(isset($raport))
        {
            if($raport->status == 'Sudah Bayar')
            {
                return redirect('raport/'.$nisn);
            }else{
                return redirect()->back()->with('failed', 'Silahkan selesaikan biaya administrasi sekolah terlebih dahulu!');
            }
        }else{
            return redirect()->back()->with('failed', 'NISN Tidak ADA!'); 
        }
    }

    public function show($nisn)
    {
        $raport = Raport::where('nisn', $nisn)->first();

        return view('template.panel.raport', compact('raport'));
    }
    
}
