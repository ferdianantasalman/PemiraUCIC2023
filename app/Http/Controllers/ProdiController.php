<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
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

        return redirect()->route('prodi.index')
            ->with('success', 'Data created successfuly.');
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
