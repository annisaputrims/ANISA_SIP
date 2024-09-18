@extends('template.base')
@section('title', 'Gelombang')
@section('content')

<div align="right" class="">
    <td>
        <a href="{{ route('gelombang.create')  }}" class="btn btn-primary btn-sm btn-rounded">Tambah Jurusan</a>
    </td>
</div>
<div class="table-responsive mt-3 ">
    <table class="table table-striped" id="example1">
        <thead align="center">
            <tr>
                <th>No</th>
                <th>Gelombang</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($gelombang as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_gelombang }}</td>
                <td>
                    <!-- Radio button dengan atribut data-id -->
                    <input type="radio" class="status-radio" name="aktif" data-id="{{ $item->id }}" @if ($item->aktif ==
                    1)
                    checked
                    @endif
                    >
                </td>
                <td>
                    <a href="{{-- route('gelombang.edit',$item->id) --}}"
                        class="btn btn-xs btn-info btn-rounded">Edit</a>
                    <form action="{{-- route('gelombang.destroy',$item->id) --}}" method="post"
                        style="display: inline-block"
                        onsubmit="return confirm('apakah anda ingin menghapus gelombang')">
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

@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function() {
        // Handle radio button change event
        $('.status-radio').on('change', function() {
            // Debugging output
            console.log('Radio button changed');

            var radio = $(this);
            var id = radio.data('id');
            var status = radio.is(':checked') ? 1 : 0;

            // Debugging output
            console.log('ID:', id, 'Status:', status);

            // Set status for all radio buttons to 0
            $('.status-radio').each(function() {
                var otherId = $(this).data('id');
                if (otherId !== id) {
                    $(this).prop('checked', false);
                }
            });

            // Send AJAX request to update status
            $.ajax({
                url: `/gelombang/${id}/update-status`,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Ensure CSRF token is correctly set
                    aktif: status // The key should match what the controller expects
                },
                success: function(response) {
                    // Handle success response
                    console.log('Success:', response);
                    alert('Status telah diperbarui!');
                },
                error: function(xhr) {
                    // Handle error response
                    console.log('Error:', xhr);
                    alert('Terjadi kesalahan saat memperbarui status.');
                }
            });
        });
    });
</script>
@endsection