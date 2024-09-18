@extends('template.base')
@section('title', 'Jurusan')
@section('content')

<div align="right" class="">
    <td>
        <a href="{{ route('jurusan.create')  }}" class="btn btn-primary btn-sm btn-rounded">Tambah Jurusan</a>
    </td>
</div>
<div class="table-responsive mt-3 ">
    <table class="table table-striped" id="example1">
        <thead align="center">
            <tr>
                <th>No</th>
                <th>Peran / Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($jurusan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_jurusan }}</td>
                <td>
                    <a href="{{ route('jurusan.edit',$item->id) }}" class="btn btn-xs btn-info btn-rounded">Edit</a>
                    <form action="{{ route('jurusan.destroy',$item->id) }}" method="post" style="display: inline-block"
                        onsubmit="return confirm('apakah anda ingin menghapus jurusan')">
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