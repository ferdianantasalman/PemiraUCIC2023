<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::oldest()->get();
        return view(
            'admin.prodi.index',
            [
                'prodi' => $prodi,
                'judul' => 'Daftar Prodi'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.prodi.create',
            [
                'judul' => 'Form Tambah Prodi',
                'subJudul' => 'Silahkan isi dengan benar!'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'kode' => 'required|unique:prodi,kode|min:1|max:10',
            'nama' => 'required|unique:prodi,nama',
            'kaprodi' => 'required',
        ]);

        Prodi::create($request->all());

        Alert::success('Data Prodi', 'Berhasil Ditambahkan!');
        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view(
            'admin.prodi.edit',
            [
                'prodi' => $prodi,
                'judul' => 'Form Edit Prodi',
                'subJudul' => 'Silahkan isi dengan benar!'
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        // validasi data
        $request->validate([
            'kode' => 'required|min:1|max:10',
            'nama' => 'required',
            'kaprodi' => 'required'
        ]);

        $prodi->update($request->all());
        Alert::success('Data Prodi', 'Berhasil diubah!');
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        Alert::success('Data Prodi', 'Berhasil dihapus!!');
        return redirect('/prodi');
    }
}
