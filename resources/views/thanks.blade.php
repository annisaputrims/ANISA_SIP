<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terima Kasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('purple/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('purple/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('purple/assets/css/style.css') }}">
    <link rel="shortcut icon" href="purple/assets/images/logo-ppkd.png">
    <style>
        body {
            background-color: #e8f5e9;
            /* Soft green background */
            color: #2e7d32;
            /* Dark green text */
        }

        .thank-you-container {
            text-align: center;
            margin-top: 50px;
            background-color: #ffffff;
            /* White background for the card */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .thank-you-container h1 {
            color: #000000;
            /* Bright green for the heading */
            font-family: 'times new roman', cursive, sans-serif;
        }

        .thank-you-container h3 {
            color: #000000;
            /* Bright green for the heading */
            font-family: 'times new roman', cursive, sans-serif;
        }

        .thank-you-container h4 {
            color: #000000;
            /* Bright green for the heading */
            font-family: 'times new roman', cursive, sans-serif;
        }

        .thank-you-container h5 {
            color: #000000;
            /* Bright green for the heading */
            font-family: 'times new roman', cursive, sans-serif;
        }

        .thank-you-container h6 {
            color: #000000;
            /* Bright green for the heading */
            font-family: 'times new roman', cursive, sans-serif;
        }

        .thank-you-container p {
            font-size: 1.2rem;
            color: #000000;
            /* Slightly darker green */
        }

        .thank-you-container img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #66bb6a;
            /* Light green button */
            border-color: #66bb6a;
        }

        .btn-primary:hover {
            background-color: #57a05b;
            /* Slightly darker green on hover */
            border-color: #57a05b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="thank-you-container">
            {{-- <h1 class="mb-4">🎉 Terima Kasih! 🎉</h1> --}}
            <img src="{{ asset('purple/assets/images/thanks.png') }}" alt="Terima Kasih Kartun" class="img-fluid"
                width="200">
            <h1 style="display-3">Terimakasih sudah mendaftar!</h1>
            <h4 class="mt-2">Informasi selanjutnya akan di umumkan pada akun sosial media instagram PPKD Jakarta
                Pusat</h4>
            {{-- <button class=" btn btn-sm btn-rounded btn-info" href="https://www.instagram.com/ppkdjp/">Instagram
                PPKD</button> --}}
            {{-- <div class="mt-4">
                <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
            </div> --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('purple/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('purple/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('purple/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('purple/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('purple/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('purple/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('purple/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('purple/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('purple/assets/js/todolist.js') }}"></script>

</body>

</html>