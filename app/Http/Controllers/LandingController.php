<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Rencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.index');
    }

    public function pengaduan()
    {
        return view('landing.pengaduan');
    }

    public function kegiatan()
    {
        $dtRencana = Rencana::where('status', true)->get();
        return view('landing.kegiatan', compact('dtRencana'));
    }
    
    public function rencana()
    {
        $dtRencana = Rencana::where('status', false)->get();
        return view('landing.rencana', compact('dtRencana'));
    }

    // public function formlogin()
    // {
    //     return view('admin.formlogin');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $this->validate($request,[
            'nama' => 'required|string|regex:/^[^0-9]*$/',
            'kontak' => [
                'required',
                'regex:/^(?:\+\d{11,}|\w+@\w+\.\w+)$/' // Format nomor HP atau email
            ],
        ]);
        if ($request) {
            // Jika validasi sukses
            Pengaduan::create([
                    'nama' => $request->nama,
                    'kontak' => $request->kontak,
                    'bagian' => $request->bagian,
                    'isi' => $request->isi,
                    'tanggal' => date('Y-m-d')
                ]);
                return redirect('pengaduan')->with('toast_success', 'Pengaduan Terkirim');
        } else {
            // Jika validasi gagal
            return redirect()->back();
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
