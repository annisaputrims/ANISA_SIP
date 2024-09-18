@extends('template.base')
@section('title', 'Tambah Jurusan')
@section('content')
<form action="{{ route('jurusan.store') }}" method="POST">
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label class="form-label" for="nama">Nama Jurusan</label>
        <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
