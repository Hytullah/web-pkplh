<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Rencana;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        // return view('admin.layout.dashboard');
        $totalRen = Rencana::where('status', false)->count();
        $totalKeg = Rencana::where('status', true)->count();
        $totalP = Pengaduan::count();
        return view('admin.layout.dashboard', ['totalRen' => $totalRen, 'totalKeg' => $totalKeg, 'totalP' => $totalP]);

        // return view('admin.layout.dashboard', ['totalKeg' => $totalKeg]);
    }

    public function datarencana()
    {
        // $dtRencana = Rencana::paginate(5);
        $dtRencana = Rencana::where('status', false)->paginate(5);
        return view('admin.rencana.datarencana', compact('dtRencana'));
    }

    public function datakegiatan(Request $request)
    {
        $dtRencana = Rencana::where('status', true)->paginate(5);
        return view('admin.kegiatan.datakegiatan', compact('dtRencana'));
    }

    public function datapengaduan(Request $request)
    {
        $bagian = $request->input('bagian');

        $query = Pengaduan::query();

        if ($bagian) {
            $query->where('bagian', $bagian);
        }

        $dtPengaduan = $query->paginate(5);

        return view('admin.pengaduan.datapengaduan', compact('dtPengaduan', 'bagian'));
    }

    // public function datapengaduan()
    // {
    //     $dtPengaduan = Pengaduan::paginate(5);
    //     return view('admin.pengaduan.datapengaduan', compact('dtPengaduan'));
    // }

    public function pengaduanpdf()
    {
        $dtPengaduan = Pengaduan::all();
        view()->share('dtPengaduan', $dtPengaduan);
        $pdfP = PDF::loadView('admin.pengaduan.pengaduan-pdf');
        return $pdfP->download('data-pengaduan.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rencana.tambahrencana');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Rencana::create([
            'nama_rencana' => $request->nama_rencana,
            'kategori_rencana' => $request->kategori_rencana,
            'tanggal_rencana' => $request->tanggal_rencana,
            'isi_rencana' => $request->isi_rencana,
            'status' => $request->status,
        ]);
        return redirect('datarencana')->with('success', 'Data Berhasil ditambahkan');
        // return redirect('datarencana')->with('toast_success', 'Task Created Successfully!');

        // $this->validate($request, [
        //     'nama_rencana' => 'required',
        //     'kategori_rencana' => 'required',
        //     'tanggal_rencana' => 'required',
        //     'isi_rencana' => 'required',
        //     'status' => 'required',
        // ]);
        // if ($request) {
        //     // Jika validasi sukses
        //     Rencana::create([
        //         'nama_rencana' => $request->nama_rencana,
        //         'kategori_rencana' => $request->kategori_rencana,
        //         'tanggal_rencana' => $request->tanggal_rencana,
        //         'isi_rencana' => $request->isi_rencana,
        //         'status' => $request->status,
        //     ]);
        //     return redirect('datarencana')->with('success', 'Data Berhasil ditambahkan');;
        // } else {
        //     // Jika validasi gagal
        //     return redirect();
        // }
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
    public function edit($id)
    {
        $ren = Rencana::findorfail($id);
        return view('admin.rencana.editrencana', compact('ren'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ren = Rencana::findorfail($id);
        $ren->update($request->all());
        return redirect('datarencana')->with('toast_info', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ren = Rencana::findorfail($id);
        $ren->delete();
        return back()->with('success', 'Data Berhasil diHapus');
    }

    public function destroyP($id)
    {
        $peng = Pengaduan::findorfail($id);
        $peng->delete();
        return back()->with('success', 'Data Berhasil diHapus');
    }
}
