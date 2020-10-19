<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;

/**
 * Class AnggotaController
 * @package App\Http\Controllers
 */
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = \Request::get('search');
        $p = Anggota::paginate();
        $anggota = \DB::table('anggota')
            ->where('nama', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat', 'LIKE', '%' . $search . '%')
            ->paginate($p->perPage());

        return view('anggota.index', compact('anggota'))
            ->with('i', (request()->input('page', 1) - 1) * $p->perPage());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = new Anggota();
        return view('anggota.create', compact('anggota'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cek validasi
        $request()->validate(Anggota::$rules);
        //mulai transaksi
        \DB::beginTransaction();
        try {
            //simpan ke tabel kota
            \DB::table('anggota')->insert([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status' => $request->status,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan
            ]);
            //jika tidak ada kesalahan commit/simpan
            \DB::commit();
            return redirect()->route('anggota.index')
                ->with('success', 'anggota created successfully.');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('anggota.index')
                ->with('success', 'Penyimpanan dibatalkan semua, ada kesalahan......');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.show', compact('anggota'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit', compact('anggota'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Anggota $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Anggota::$rules);
        //mulai transaksi
        \DB::beginTransaction();
        try {
            \DB::table('anggota')->where('id', $id)->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status' => $request->status,
                'telepon' => $request->telepon,
                'keterangan' => $request->keterangan
            ]);
            //$anggota->update($request->all());
            \DB::commit();
            return redirect()->route('anggota.index')
                ->with('success', 'Anggota updated successfully');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('anggota.index')
                ->with('success', 'Anggota Batal diubah, ada kesalahan');
        }
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //mulai transaksi
        \DB::beginTransaction();
        try {
            //hapus rekaman tabel kota
            $anggota = Anggota::find($id)->delete();
            \DB::commit();
            return redirect()->route('anggota.index')
                ->with('success', 'anggota deleted successfully');
        } catch (\Throwable $e) {
            //jika terjadi kesalahan batalkan semua
            \DB::rollback();
            return redirect()->route('anggota.index')
                ->with('success', 'anggota ada kesalahan hapus batal... ');
        }
    }
}
