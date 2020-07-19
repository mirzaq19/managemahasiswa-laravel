@extends('layout/main')

@section('title','List Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-7">
      <h1 class="my-4" >Daftar Mahasiwa</h1>
      <a href="/students/create" class="btn btn-primary my-2">Tambah Data Mahasiswa</a>
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif
      <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$student->nama}}
        <a href="/students/{{ $student->id }}" class="badge badge-primary">detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection