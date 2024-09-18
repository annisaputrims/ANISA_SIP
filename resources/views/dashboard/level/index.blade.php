@extends('template.base')
@section('title', 'Peran / Level')
@section('content')

<div align="right" class="">
    <td>
        <a href="{{ route('level.create')}}" class="btn btn-primary btn-sm">Tambah Level</a>
    </td>
</div>
<div class="table-responsive mt-3">
    <table class="table table-bordered " id="example1">
        <thead>
            <tr>
                <th>No</th>
                <th>Peran / Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($level as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_level }}</td>
                <td>
                    <a href="{{ route('level.edit',$item->id) }}" class="btn btn-xs btn-info btn-rounded">Edit</a>
                    <form action="{{ route('level.destroy',$item->id) }}" method="post" style="display: inline-block"
                        onsubmit="return confirm('apakah anda ingin menghapus level')">
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
