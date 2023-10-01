@extends('admin.layouts.main')

@section('content-admin')
  <div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end px-2">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <span class="text-muted fw-light">Kandidat</span>
        </li>
        <li class="breadcrumb-item active">Tambah</li>
      </ol>
    </nav>
    <div class="card mb-4">
      <div class="card-header align-items-center">
        <h5 class="mb-2">{{ $judul }}</h5>
        <small class="text-muted">{{ $subJudul }}</small>
      </div>
      <div class="card-body">
        <form action="{{ route('kandidat-admin.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="no_paslon">No urut</label>
            <div class="col-sm-2">
              <div class="input-group">
                <input type="number" class="form-control @error('no_paslon') border-danger @enderror" id="no_paslon" name="no_paslon" value="{{ old('no_paslon') }}" />
              </div>
              @error('no_paslon')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" class="form-control @error('nama') border-danger @enderror" id="nama" name="nama" value="{{ old('nama') }}" />
              </div>
              @error('nama')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nim">NIM</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" class="form-control @error('nim') border-danger @enderror" id="nim" name="nim" value="{{ old('nim') }}" />
              </div>
              @error('nim')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="prodi_id">prodi</label>
              <div class="col-sm-4">
                  <div class="input-group">
                    <select class="form-select @error('prodi_id') border-danger @enderror" id="prodi_id" name="prodi_id">
                        @foreach($prodi as $p)
                          <option value="{{ $p->id }}"> {{ $p->nama }} </option>
                        @endforeach
                    </select>
                  </div>
                  @error('prodi_id')
                  <div class="form-text text-danger">
                      *{{ $message }}
                  </div>
                  @enderror
              </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="semester">semester</label>
            <div class="col-sm-2">
              <div class="input-group">
                <input type="number" class="form-control @error('semester') border-danger @enderror" id="semester" name="semester" value="{{ old('semester') }}" />
              </div>
              @error('semester')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="riwayat_pendidikan">riwayat_pendidikan</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" class="form-control @error('riwayat_pendidikan') border-danger @enderror" id="riwayat_pendidikan" name="riwayat_pendidikan" value="{{ old('riwayat_pendidikan') }}" />
              </div>
              @error('riwayat_pendidikan')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="riwayat_organisasi">riwayat_organisasi</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" class="form-control @error('riwayat_organisasi') border-danger @enderror" id="riwayat_organisasi" name="riwayat_organisasi" value="{{ old('riwayat_organisasi') }}" />
              </div>
              @error('riwayat_organisasi')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">image</label>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="file" class="form-control @error('image') border-danger @enderror" id="image" name="image" />
              </div>
              @error('image')
              <div class="form-text text-danger">
                *{{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="row justify-content-end mt-4">
            <div class="col-sm-10">
              <a href="/kandidat-admin">
                <button type="button" class="btn btn-sm btn-secondary px-3">Back
                </button>
              </a>
              <button type="submit" class="btn btn-sm btn-primary px-3">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection