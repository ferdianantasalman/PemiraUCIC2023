@extends('admin.layouts.main')

@section('content-admin')
  <div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb" class="d-flex justify-content-end">
      <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
          <span class="text-muted fw-light">Prodi</span>
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
            <th>Kode</th>
            <th>Nama</th>
            <th>Kaprodi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($prodi as $prd)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $prd->kode }}</td>
            <td>{{ $prd->nama }}</td>
            <td>{{ $prd->kaprodi }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i> 
                    Edit
                  </a>
                  <a class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-trash me-1"></i> 
                    Delete
                  </a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    @if ($message = Session::get('success'))
      <div class="bs-toast toast toast-placement-ex m-2 fade bg-success bottom-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class='bx bx-bell me-2'></i>
          <div class="me-auto fw-medium">Notifications</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          {{ $message }}
        </div>
      </div>
    @endif
    
  </div>
@endsection