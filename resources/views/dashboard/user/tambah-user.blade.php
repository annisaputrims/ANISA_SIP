@extends('template.base')
@section('title', 'Tambah User')
@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="form-group">
        <label for="nama_lengkap" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required value="{{-- old('name') --}}">
    </div>
    <div class="form-group">
        <label for="form-label">Pilih Level</label>
        <select name="id_level" id="id_level" class="form-control">
            <option value="" selected>Pilih Level</option>
            @foreach ($level as $item )
            <option value="{{ $item->id }}">{{ $item->nama_level }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
