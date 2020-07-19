@extends('layout/main')

@section('title','Ubah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-7">
      <h1 class="my-4" >Ubah Data Mahasiwa</h1>
        <form method="post" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="Masukkan nama..." name="nama"  value="{{ $student->nama }}" autofocus>
          @error('nama')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" class="form-control @error('nrp')is-invalid @enderror" id="nrp" placeholder="Masukkan nrp..." name="nrp" value="{{ $student->nrp }}">
          @error('nrp')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email..." name="email" value="{{ $student->email }}">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan..." name="jurusan" value="{{ $student->jurusan }}">
        </div>
        <button type="submit" class="btn btn-primary" name="">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>
@endsection