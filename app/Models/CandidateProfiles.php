<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_paslon',
        'nama',
        'nim',
        'prodi_id',
        'semester',
        'riwayat_pendidikan',
        'riwayat_organisasi',
        'image'
    ];
}
