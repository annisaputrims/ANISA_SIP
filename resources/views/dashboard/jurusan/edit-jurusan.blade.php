@extends('template.base')
@section('title','Edit Peran / Level')
@section('content')
<form action="{{ route('jurusan.update',$jurusan->id) }}" method="POST">
    @method('put')
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif
    <div class="form-group">
        <label for="nama_jurusan">Jurusan</label>
        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" required value="{{ $jurusan->nama_jurusan }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
