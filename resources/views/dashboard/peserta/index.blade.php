@extends('template.base')

@section('title', 'Peserta')
@section('content')

<div class="card ">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        {{-- <div class="d-flex justify-content-end my-3">
            <a href="{{ route('gelombang.create') }}" class="btn btn-primary btn-sm">Tambah Gelombang</a>
        </div> --}}
        <div class="table-responsive">
            <table class="display table table-striped table-hover" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Jurusan Pelatihan</th>
                        <th>Status</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->jurusan->nama_jurusan }}</td>
                        @if (auth()->user()->id_level != 1 && auth()->user()->id_level != 2)
                        <td>anda tidak memiliki akses</td>
                        @else
                        <td>
                            {{--
                            <!-- Radio button for "Wawancara" -->
                            <input type="radio" class="statusRadio" name="status_{{ $item->id }}"
                                id="status_wawancara_{{ $item->id }}" data-id="{{ $item->id }}" value="0"
                                @if($item->status
                            == 0) checked @endif>
                            <label for="status_wawancara_{{ $item->id }}">Wawancara</label> --}}

                            <!-- Radio button for "Lolos" -->
                            <input type="radio" class="statusRadio" name="status_{{ $item->id }}"
                                id="status_lolos_{{ $item->id }}" data-id="{{ $item->id }}" value="1" @if($item->status
                            == 1) checked @endif>
                            <label for="status_lolos_{{ $item->id }}">Lolos</label>

                            <!-- Radio button for "Tidak Lolos" -->
                            <input type="radio" class="statusRadio" name="status_{{ $item->id }}"
                                id="status_tidak_lolos_{{ $item->id }}" data-id="{{ $item->id }}" value="0"
                                @if($item->status == 0) checked @endif>
                            <label for="status_tidak_lolos_{{ $item->id }}">Tidak Lolos</label>
                        </td>
                        @endif
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>
                            <a href="{{ route('peserta.detail', $item->id) }}"
                                class="btn btn-outline-primary btn-sm">Detail</a>

                            {{-- @if ($item->confirm == 1)
                            @if (auth()->user()->id_level == 2)
                            <span style="background-color: #25D366; color: #fff;" class="badge">Sudah
                                diinformasikan</span>
                            @endif
                            <!-- Jika status sudah diinformasikan, tampilkan badge -->
                            @else
                            <!-- Jika status belum diinformasikan, tampilkan tombol WhatsApp -->
                            @if (auth()->user()->id_level == 2)
                            <a href="https://wa.me/{{ $item->nomorHp }}" target="_blank" class="btn btn-sm"
                                style="background-color: #25D366; color: #fff;" id="cek" data-id="{{ $item->id }}">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                            @endif
                            @endif --}}

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow-lg">
    <div class="card-header ">
        <h4 class="mb-0">Filter Siswa</h4>
    </div>
    <div class="card-body">
        <form action="{{-- route('cari.jurusan') --}}" method="post">
            @csrf
            <div class="form-group row">
                <!-- Select untuk Jurusan -->
                <label for="levelSelect" class="col-sm-6 col-form-label">Pilih Peserta Berdasarkan Jurusan</label>
                <div class="col-sm-6">
                    <select name="jurusan_id" id="levelSelect" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        @foreach ($jurusan as $lvl)
                        <option value="{{ $lvl->id }}" {{ isset($level) && $level->id == $lvl->id ? 'selected' : '' }}>
                            {{ $lvl->nama_jurusan }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <!-- Select untuk Tahun Ajaran -->
                <label for="yearSelect" class="col-sm-6 col-form-label">Pilih Gelombang Ajaran</label>
                <div class="col-sm-6">
                    <select name="gelombang_id" id="yearSelect" class="form-control">
                        <option value="">Pilih Gelombang Ajaran</option>
                        @foreach ($gelombang as $year)
                        <option value="{{ $year->id }}" {{ isset($selectedYear) && $selectedYear==$year->id ? 'selected'
                            : '' }}>
                            {{ $year->nama_gelombang }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-block" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function() {
            // $("#basic-datatables").DataTable({});
            $('.statusRadio').on('change', function() {
                // var itemId = $(this).data('id');
                // var status = $(this).val();
                // console.log('Item ID:', itemId);
                // console.log('Status:', status);

                // $.ajax({
                //     url: `/peserta/${itemId}/seleksi`,
                //     method: 'POST',
                //     data: {
                //         _token: '{{ csrf_token() }}',
                //         status: status
                //     },
                //     success: function(response) {
                //         console.log('Response:', response); // Log response for debugging
                //         alert('Peserta berhasil diseleksi');
                //     },
                //     error: function(xhr) {
                //         console.log('XHR:', xhr.statusText); // Log xhr object for debugging
                //         alert('Error: ' + xhr.status + ' ' + xhr.statusText);
                //     }
                // });
            //   alert('mantap coy');
            var id = $(this).data('id');
            var select = $(this).val()
            // console.log(id, select);
$.ajax({
    url: `/status/${id}`,
    method:'POST',
    data:{
        _token: '{{ csrf_token() }}',
        status: select
    },
    success: function(response){
        console.log('respon', response);
        alert('Status berhasil diganti.')
    },
    error: function(err){
        console.log('error', err);
        alert('Status gagal diganti!')
    }
            })

            });
        });
</script>
@endsection
