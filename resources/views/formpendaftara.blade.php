@extends('template.main')

@section('container')
<div class="jumbotron">
    <h1 class="display-4">Daftar</h1>   
        <hr class="my-4">
    <form action="" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
              <label for="exampleInputNama">Nama Peserta</label>
              <input type="text" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>

            <div class="form-group">
              <label for="exampleInputNama">Asal Sekolah</label>
              <input type="text" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>
          
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select class="form-control" id="exampleFormControlSelect1" name="prodi" required>
                <option selected disabled value="">Pilih...</option>
                <option>Pria</option>
                <option>Wanita</option>
              </select>
              <div class="invalid-feedback">
                Dipilih Dong!
              </div>
            </div>


            <div class="form-group">
              <label for="exampleInputNama">Tempat Lahir</label>
              <input type="text" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>


            <div class="form-group">
              <label for="exampleInputNama">Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>

           <div class="form-group">
              <label for="exampleInputNama">Tinggi badan</label>
              <input type="text" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>


            <div class="form-group">
              <label for="exampleInputNama">berat Badan</label>
              <input type="text" class="form-control" id="exampleInputNama" name="nama_mhs" required>
              <div class="invalid-feedback">
                    Masukkan nama dong!
                  </div>
            </div>


            <br>
            <button type="submit" class="btn btn-primary">Proses</button>
          </form>
    </div>
    <br>
@endsection