@extends('template.base')
@section('title', 'Tambah Gelombang')
@section('content')
<form action="{{ route('gelombang.store') }}" method="POST">
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label class="form-label" for="nama">Gelombang</label>
        <input type="text" class="form-control" name="nama_gelombang" id="nama_gelombang">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection