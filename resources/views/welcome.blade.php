<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('purple/assets/images/logo-ppkd.ico') }}" />
    <title>PPKD Jakarta Pusat - Pendaftaran Pelatihan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #bdbdbd;
            /* Forest Green */
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(219, 217, 217);
            /* Semi-transparent background */
        }

        .content {
            text-align: center;
            max-width: 800px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #273747;
            font-size: 2.5em;
        }

        p {
            font-size: 1.1em;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 20px 30px;
            font-size: 1rem;
            line-height: 1;
            font-family: "ubuntu-bold", sans-serif;
            color: #fff;
            /* Warna teks tombol */
            background-color: #e74c3c;
            /* Warna merah */
            border: none;
            border-radius: 50px;
            /* Membuat tombol rounded */
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c0392b;
            /* Warna merah lebih gelap untuk efek hover */
        }

        a img {
            width: 150px;
            /* Ubah sesuai kebutuhan */
            height: auto;
            /* Menjaga rasio aspek gambar */
            border: none;
            /* Menghilangkan border default jika ada */
        }

        /* Jika Anda ingin memberikan efek pada tag <a> itu sendiri */
        a {
            display: inline-block;
            /* Membolehkan perubahan ukuran pada elemen <a> */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <a class="mt-10" href="">
                <img src="{{ asset('purple/assets/images/logo-ppkd.png') }}" alt="logo">
            </a>
            <h1>Pendaftaran Pelatihan <br>PPKD Jakarta Pusat</h1>
            <p>Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan
                kompetensi warga Jakarta agar mampu bersaing di dunia kerja. <br> ⬇️ Silahkan Daftar melalui link
                dibawah
                ini ⬇️</p>
            <a href="{{ route('form') }}" class="btn btn-danger btn-rounded">Daftar Sekarang</a>
        </div>
    </div>
</body>

</html>
