<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfiles;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CandidateProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $profiles = CandidateProfiles::leftJoin("prodi", "prodi.id", "=", "candidate_profiles.prodi_id")
        ->select("candidate_profiles.*", "prodi.nama as prodi_nama")
        ->get();

        return view("admin.kandidat.index",
                    [
                        "profiles" => $profiles,
                        "judul" => "Daftar Kandidat"
                    ]
                );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $prodi = Prodi::oldest()->get();

        return view("admin.kandidat.create",
                [
                    'judul' => 'Form Tambah Kandidat',
                    'subJudul' => 'Silahkan isi dengan benar!',
                    "prodi" => $prodi
                ]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "no_paslon" => "required",
            "nama" => "required",
            "nim" => "required",
            "prodi_id" => "required",
            "semester" => "required",
            "riwayat_pendidikan" => "required",
            "riwayat_organisasi" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg",
        ]);

        $input = $request->all();

        if ($image = $request->file("image")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis").".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["image"] = "$profileImage";
        }

        CandidateProfiles::create($input);

        return redirect()->route("kandidat-admin.index")
                        ->with("success", "Candidate profiles created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(CandidateProfiles $candidateProfiles): View
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CandidateProfiles $kandidat_admin): View
    { 
        // $profile = CandidateProfiles::leftJoin('prodi', 'prodi.id', '=', 'candidate_profiles.prodi_id')
        //     ->select('candidate_profiles.*', 'prodi.nama AS prodi_nama')
        //     ->where('candidate_profiles.prodi_id', $kandidat_admin->prodi_id)
        //     ->first();

        $prodi = Prodi::oldest()->get();

        return view("admin.kandidat.edit",
                    [
                        'profile' => $kandidat_admin,
                        'prodi' => $prodi,
                        'judul' => 'Form Edit Kandidat',
                        'subJudul' => 'Silahkan isi dengan benar!'
                    ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CandidateProfiles $kandidat_admin): RedirectResponse
    {
        $request->validate([
            "no_paslon" => "required",
            "nama" => "required",
            "nim" => "required",
            "prodi_id" => "required",
            "semester" => "required",
            "riwayat_pendidikan" => "required",
            "riwayat_organisasi" => "required",
        ]);

        $input = $request->all();

        if ($image = $request->file("image")) {
            $destinationPath = "images/";
            $profileImage = date("YmdHis").".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["image"] = "$profileImage";
        } else {
            unset($input["image"]);
        }

        $kandidat_admin->update($input);

        return redirect()->route("kandidat-admin.index")
                        ->with("success", "Candidate profiles updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CandidateProfiles $kandidat_admin): RedirectResponse
    {
        unlink(public_path("images/".$kandidat_admin->image));
        $kandidat_admin->delete();

        return redirect()->route("kandidat-admin.index")
                        ->with("success", "Candidate Profile deleted successfully");
    }
}
