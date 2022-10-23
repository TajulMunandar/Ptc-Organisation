@extends('template.main')

@section('container')
<div class="row">
    <div class="col">
    <h1 class="h1-bg">
    Selamat Datang Di Website Pendaftaran <span class="fw-bold">PTC COMPETITION</span></h1>

    <button type="button" class="btn btn-outline-primary" onclick ="location.href='/home/peserta/create'">Daftar</button>
    </div>
    <div class="col">
        <img src="img/bg.jpg" alt="" width="100%">
    </div>
</div>
@endsection