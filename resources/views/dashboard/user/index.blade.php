@extends('template.base')
@section('title', 'User')
@section('content')

<div align="right" class="">
    <td>
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Tambah User</a>
    </td>
</div>
<div class="table-responsive mt-3">
    <table class="table table-hover" id="example1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Peran</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->level->nama_level}}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.edit',$item->id) }}" class="btn btn-xs btn-info btn-rounded">Edit</a>
                    <form action="{{ route('user.destroy',$item->id) }}" method="post" style="display: inline-block"
                        onsubmit="return confirm('apakah anda ingin menghapus user')">
                        @csrf
                        @method('delete')
                        <button class="btn btn-xs btn-danger btn-rounded" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
