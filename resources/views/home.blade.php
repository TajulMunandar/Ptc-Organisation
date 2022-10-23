@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="card">
          <div class="card-header fw-bold">Daftar Peserta</div>

          <div class="card-body">
            <a href="{{ route('peserta.create') }}" class="btn btn-primary mb-4">Tambah Peserta</a>
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID Peserta</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pesertas as $peserta)
                  <tr>
                    <td>{{ $peserta->id }}</td>
                    <td>{{ $peserta->nama }}</td>
                    <td>{{ $peserta->tempat_lahir }}</td>
                    <td>{{ $peserta->tgl_lahir }}</td>
                    <td>
                      @if ($peserta->jk == 1)
                        {{ 'Pria' }}
                      @elseif ($peserta->jk == 2)
                        {{ 'Wanita' }}
                      @endif
                    </td>
                    <td>{{ $peserta->alamat }}</td>
                    <td>{{ '+62' . $peserta->telepon }}</td>
                    <td>
                      <a href="/home/peserta/{{ $peserta->id }}/edit" class="btn btn-warning">Edit</a>
                      <a class="btn btn-danger" href="#modalHapus{{ $loop->iteration }}" data-bs-toggle="modal">Hapus</a>
                    </td>
                  </tr>

                  {{-- Modal Hapus --}}
                  <div class="modal fade" id="modalHapus{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Hapus Peserta</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/home/peserta/{{ $peserta->id }}" method="post">
                          @csrf
                          <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $peserta->id }}">
                            <p class="fs-6">Apakah anda yakin akan menghapus data <b>{{ '#' . $peserta->id }}</b> ?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  {{-- End Modal Hapus --}}
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
