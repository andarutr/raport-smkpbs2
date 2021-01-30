<?php

namespace App\Http\Controllers\Admin;

use App\Raport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $menu = 'Dashboard';
        $siswa = Raport::orderByDesc('id')->limit(8)->get();
        $siswa_total = Raport::count();
        $siswa_payment = Raport::where('status','Sudah Bayar')->count();
        $siswa_not_payment = Raport::where('status','Belum Bayar')->count();

        return view('template.panel.dashboard', compact('menu','siswa','siswa_total','siswa_payment','siswa_not_payment'));
    }

    public function administrasi()
    {
        $menu = 'Administrasi';
        $raport = Raport::orderBy('name')->paginate(10);

        return view('template.panel.administrasi', compact('menu','raport'));
    }

    public function payment($id)
    {
        Raport::where('id',$id)
            ->update([
                'status' => 'Sudah Bayar'
            ]);

        return redirect()->back()->with('message', 'Berhasil mengubah status pembayaran peserta didik!');
    }

    public function cancelPayment($id)
    {
        Raport::where('id',$id)
            ->update([
                'status' => 'Belum Bayar'
            ]);

        return redirect()->back()->with('message', 'Berhasil mengubah status pembayaran peserta didik!');
    }

    public function listRaport()
    {
        $menu = 'E-Raport';
        $raport = Raport::orderBy('name')->paginate(10);

        return view('template.panel.list_raport', compact('menu','raport'));
    }

    public function tambahRaport()
    {
        $menu = 'E-Raport';

        return view('template.panel.tambah_raport', compact('menu'));
    }

    public function tambah_raport(Request $req)
    {
    	$this->validate($req, [
    		'name' => 'required',
    		'nisn' => 'required',
    		'classroom' => 'required',
    		'status' => 'required',
    	]);

    	Raport::create([
    		'name' => strtoupper($req->name),
    		'nisn' => $req->nisn,
    		'classroom' => $req->classroom,
    		'status' => $req->status,
    	]);

    	return redirect()->back()->with('success', 'Sukses tambah raport!');
    }

    public function kirimRaport()
    {
        $menu = 'E-Raport';
        $raport = Raport::orderBy('name')->paginate(10);

        return view('template.panel.kirim_raport', compact('menu','raport'));
    }

    public function uploadRaport($id)
    {
        $menu = 'E-Raport';
        $raport = Raport::where('id', $id)->first();

        return view('template.panel.upload_raport', compact('menu','raport'));
    }
    
    public function kirim_raport(Request $request, $id)
    {
        $this->validate($request, [
            'raport' => 'required',
        ]);

        $siswa = Raport::find($id);
        $raport = 'Raport_'.str_replace(' ', '_', $siswa->name).'_'.str_replace(' ', '_', $siswa->classroom).'.pdf';

        $file = $request->file('raport');
        $file->move('assets/doc/raport/', $raport);

        Raport::where('id',$id)
                ->update([
            'raport' => $raport
        ]);

        return redirect('/panel/admin/kirim-raport')->with('message', 'E-Raport telah terkirim!');
    }
}