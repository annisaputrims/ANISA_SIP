<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Peserta PPKD Jakarta Pusat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="shortcut icon" href="{{ asset('purple/assets/images/logo-ppkd.ico') }}" />
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="demo-page">
        {{-- @include('form.side-form') --}}
        <main class="demo-page-content">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Form Pendaftaran</title>
                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous">
                </script>
                <style>
                    body {
                        background-color: #f0f8ff;
                    }

                    .container {
                        display: flex;
                        align-content: center;
                        gap: 15px;
                        max-width: 800px;
                        background: #ffffff;
                        padding: 30px;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .container {
                        max-width: 800px;
                        background: #ffffff;
                        padding: 30px;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .form-head {
                        display: flex;
                        align-items: center;
                        gap: 15px;
                        margin: 0%;
                    }

                    .form-container {
                        color: #041425;
                        margin-bottom: 20px;
                        align-content: justify;
                    }

                    .form-label {
                        color: #495057;
                    }

                    .form-control,
                    .form-select {
                        border-radius: 8px;
                    }

                    .form-control:focus,
                    .form-select:focus {
                        border-color: #007bff;
                        box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .25);
                    }

                    .btn-primary {
                        background-color: #007bff;
                        border-color: #007bff;
                    }

                    .btn-primary:hover {
                        background-color: #0056b3;
                        border-color: #004085;
                    }

                    .form-check-label a {
                        color: #007bff;
                    }

                    .form-check-label a:hover {
                        text-decoration: underline;
                    }

                    .invalid-feedback {
                        color: #dc3545;
                    }

                    .form-check-label a {
                        color: #007bff;
                    }

                    .form-check-label a:hover {
                        text-decoration: underline;
                    }

                    .requirements-list,
                    .jurusan-list {
                        margin-bottom: 1.5rem;
                    }

                    .requirements-list ul,
                    .jurusan-list ul {
                        padding-left: 1.5rem;
                    }

                    a img {
                        width: 125px;
                        /* Ubah sesuai kebutuhan */
                        height: auto;
                        /* Menjaga rasio aspek gambar */
                        border: none;
                        /* Menghilangkan border default jika ada */
                    }
                </style>
            </head>

            <body>
                <div class="container mt-5 mb-2">
                    <div class="form-head">
                        <a class="mt-10" href="">
                            <img src="{{ asset('purple/assets/images/logo-ppkd.png') }}" alt="logo">
                        </a>
                        <h1 class="text-center ">Form Pendaftaran Pelatihan Reguler PPKD Jakarta Pusat</h1>
                    </div>
                </div>
                <div class="container mt-2">
                    <div class="form-header">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="requirements-list">
                            <h6 class="mb-3">Syarat Pendaftaran:</h6>
                            <ul>
                                <li>1. Warga Negara Indonesia (WNI).</li>
                                <li>2. Memiliki KTP dan KK yang masih berlaku.</li>
                                <li>3. Berusia minimal 18 tahun dan maksimal 35 tahun pada saat pendaftaran.
                                </li>
                                <li>4. Memiliki pendidikan minimal SD atau sederajat.</li>
                                <li>5. Sehat jasmani dan rohani.</li>
                                <li>6. Belum pernah mengikuti pelatihan yang sama sebelumnya.</li>
                                <li>7. Memiliki komitmen untuk mengikuti seluruh rangkaian pelatihan.</li>
                                <li>8. Menandatangani pernyataan kesanggupan dan persetujuan syarat dan
                                    ketentuan.</li>
                            </ul>

                            <p><strong>*Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu
                                    gugat</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container mt-3 mb-5">
                    <div class="form col-12 ">
                        <p class="mt-2 justify-content-center"><strong>Silahkan mengisi data diri di bawah ini
                                untuk
                                mendaftar⬇️</strong></p>
                        <form class="needs-validation " novalidate action="{{ route('masuk') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Nama Lengkap *</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="firstName"
                                    placeholder="Nama Depan" required>
                                <div class="invalid-feedback">
                                    Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="education" class="form-label">Pendidikan Terakhir *</label>
                                <select class="form-select" id="education" required name="pendidikan_terakhir">
                                    <option value="" disabled selected>Pilih Lulusan Terakhir Anda</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                                <div class="invalid-feedback">
                                    Lulusan Terakhir harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="schoolName" class="form-label">Nama Sekolah *</label>
                                <input type="text" name="nama_sekolah" class="form-control" id="schoolName"
                                    placeholder="Nama Sekolah" required>
                                <div class="invalid-feedback">
                                    Nama Sekolah harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kejuruan" class="form-label">Kejuruan pendidikan terakhir *</label>
                                <input type="text" name="kejuruan" class="form-control" id="kejuruan"
                                    placeholder="Kejuruan Pendidikan Terakhir" required>
                                <div class="invalid-feedback">
                                    Kejuruan harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="major" class="form-label">Jurusan Pelatihan *</label>
                                <select class="form-select" id="major" required name="id_jurusan">
                                    <option value="" disabled selected>Pilih Jurusan Pelatihan Anda</option>
                                    @foreach ($jurusan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Jurusan Pelatihan harus diisi.
                                </div>
                            </div>

                            <input type="hidden" name="id_gelombang" value="{{ $gelombang->id ?? '' }}">
                            <div class="mb-3">
                                <label for="currentActivity" class="form-label">Angkatan Pelatihan Reguler </label>
                                <input class="form-control" type="text" value="{{ $gelombang->nama_gelombang }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label for="currentActivity" class="form-label">Kegiatan Saat Ini * </label>
                                <input type="text" name="aktivitas_saat_ini" class="form-control" id="currentActivity"
                                    placeholder="Kegiatan Saat Ini" required>
                                <div class="invalid-feedback">
                                    Kegiatan saat ini harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Nomor HP *</label>
                                <input type="tel" class="form-control" name="nomor_hp" id="phoneNumber"
                                    placeholder="Nomor HP" required>
                                <div class="invalid-feedback">
                                    Nomor HP harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">No. NIK *</label>
                                <input type="number" class="form-control" name="nik" id="nik" placeholder="No. NIK"
                                    required>
                                <div class="invalid-feedback">
                                    NIK harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kk" class="form-label">No Kartu Keluarga *</label>
                                <input type="number" class="form-control" name="kartu_keluarga" id="kk"
                                    placeholder="No Kartu Keluarga" required>
                                <div class="invalid-feedback">
                                    No Kartu Keluarga harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthPlace" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="birthPlace"
                                    placeholder="Tempat Lahir" required>
                                <div class="invalid-feedback">
                                    Tempat Lahir harus diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                                <div class="invalid-feedback">
                                    Masukkan email yang valid.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin *</label>
                                <select class="form-select" id="gender" required name="jenis_kelamin">
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                                <div class="invalid-feedback">
                                    Pilih jenis kelamin.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="dob" required>
                                <div class="invalid-feedback">
                                    Pilih tanggal lahir.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat *</label>
                                <textarea name="alamat" class="form-control" id="address" rows="3" placeholder="Alamat"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Alamat harus diisi.
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">Saya setuju dengan <a href="#">syarat dan
                                        ketentuan</a></label>
                                <div class="invalid-feedback">
                                    Anda harus menyetujui syarat dan ketentuan.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success mt-3">Daftar</button>
                        </form>
                    </div>
                </div>

                <!-- Bootstrap JS and dependencies -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js">
                </script>
                <!-- Custom JS for form validation -->
                <script>
                    (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
                </script>
            </body>

            </html>
        </main>
    </div>
    <!-- partial -->


    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>