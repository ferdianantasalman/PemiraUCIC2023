@extends('admin.layouts.main')

@section('content-admin')
  <div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <span class="text-muted fw-light">Kandidat</span>
        </li>
        <li class="breadcrumb-item active">Daftar</li>
      </ol>
    </nav>
    <div class="card p-4">
      <h5 class="card-header p-0 mb-4">{{ $judul }}</h5>

      <table id="example" class="table table-striped py-3" style="width: 100%">
        <thead>
          <tr>
            <th>No.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Riwayat Pendidikan</th>
            <th>Riwayat Organisasi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($profiles as $profile)
          <tr>
            <td>{{ $profile->no_paslon }}. </td>
            <td><img src="/images/{{ $profile->image }}" alt="foto" style="width: 40px; height: 60px;"></td>
            <td>{{ $profile->nama }}</td>
            <td>{{ $profile->nim }}</td>
            <td>{{ $profile->prodi_nama }}</td>
            <td>{{ $profile->semester }}</td>
            <td>{{ $profile->riwayat_pendidikan }}</td>
            <td>{{ $profile->riwayat_organisasi }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('kandidat-admin.edit', $profile->id) }}">
                    <i class="bx bx-edit-alt me-1"></i> 
                    Edit
                  </a>

                  <form action="{{ route('kandidat-admin.destroy', $profile->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item" onclick="javascript: return confirm('Apakah anda yakin ingin menghapus data ini?')">
                      <i class="bx bx-trash me-1"></i> 
                      Delete
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
@endsection