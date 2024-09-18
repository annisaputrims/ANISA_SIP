@extends('template.base')
@section('title', 'Tambah Peran/Level')
@section('content')
<form action="{{ route('level.store') }}" method="POST">
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label class="form-label" for="nama">Nama Peran / Level</label>
        <input type="text" class="form-control" name="nama_level" id="nama_level">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
