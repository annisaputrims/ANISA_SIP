@extends('template.base')
@section('title','Edit User')
@section('content')
<form action="{{ route('user.update',$user->id) }}" method="POST">
    @method('put')
    @csrf
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif
    <div class="form-group">
        <label for="nama_lengkap">Nama</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required value="{{ $user->nama_lengkap }}">
    </div>
    <div class="form-group">
        <label for="form-label">Pilih Level</label>
        <select name="id_level" id="id_level" class="form-control">
            <option value="" selected>Pilih Level</option>
            @foreach ($level as $item )
            <option value="{{ $item->id }}" {{ $item->id == $user->id_level ? 'selected': ''}} >{{ $item->nama_level }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
