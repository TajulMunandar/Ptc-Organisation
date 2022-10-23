@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-6">
        <form action="{{ route('peserta.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
          </div>

          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
          </div>

          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jk" name="jk">
              <option value="1">Pria</option>
              <option value="2">Wanita</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>

          <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon">
          </div>

          <div class="text-end">
            <a href="/home" class="btn btn-secondary me-1">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
