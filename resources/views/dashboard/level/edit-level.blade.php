@extends('template.base')
@section('title','Edit Peran / Level')
@section('content')
<form action="{{ route('level.update',$level->id) }}" method="POST">
    @method('put')
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif
    <div class="form-group">
        <label for="nama_level">Nama</label>
        <input type="text" class="form-control" id="nama_level" name="nama_level" required value="{{ $level->nama_level }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
