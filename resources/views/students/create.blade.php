@extends('layout/main')

@section('title','Tambah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-7">
      <h1 class="my-4" >Tambah Data Mahasiwa</h1>
      <form method="post" action="/students">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" placeholder="Masukkan nama..." name="nama"  value="{{ old('nama') }}" autofocus>
          @error('nama')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" class="form-control @error('nrp')is-invalid @enderror" id="nrp" placeholder="Masukkan nrp..." name="nrp" value="{{ old('nrp') }}">
          @error('nrp')
          <div class="invalid-feedback"> {{$message}} </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email..." name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan..." name="jurusan" value="{{ old('jurusan') }}">
        </div>
        <button type="submit" class="btn btn-primary" name="">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>
@endsection