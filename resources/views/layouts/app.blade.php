<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - LaporBanjir</title>

    <style>
        /* ===== Pengaturan dasar ===== */
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            line-height: 1.5;
        }

        /* ===== Header & navigasi ===== */
        header {
            background: #1d4ed8;
            color: white;
            padding: 16px 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        header h1 { font-size: 22px; }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 16px;
        }
        nav a:hover { text-decoration: underline; }

        /* ===== Isi halaman ===== */
        main { padding: 30px 0; min-height: 70vh; }
        main h2 { margin-bottom: 20px; }

        /* ===== Form ===== */
        .form-box {
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        .form-group { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; font-weight: bold; }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
        }
        button {
            background: #1d4ed8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover { background: #1e40af; }

        /* ===== Alert ===== */
        .alert {
            padding: 14px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .alert-success { background: #dcfce7; color: #166534; }
        .alert-danger  { background: #fee2e2; color: #991b1b; }

        /* ===== Kartu laporan ===== */
        .card {
            background: white;
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 14px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
        }
        .card p { font-size: 14px; color: #475569; }

        /* ===== Badge status ===== */
        .badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            color: white;
        }
        .waspada { background: #eab308; }
        .siaga   { background: #f97316; }
        .awas    { background: #dc2626; }

        /* ===== Tabel konfirmasi ===== */
        table { width: 100%; border-collapse: collapse; background: white; }
        td { padding: 10px; border: 1px solid #e2e8f0; }
        td:first-child { width: 35%; font-weight: bold; background: #f8fafc; }

        /* ===== Footer ===== */
        footer {
            background: #1e293b;
            color: #cbd5e1;
            text-align: center;
            padding: 16px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>LaporBanjir BPBD Kab. Bandung</h1>
            <nav>
                <a href="{{ route('laporan.form') }}">Form Laporan</a>
                <a href="{{ route('laporan.daftar') }}">Daftar Laporan</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} LaporBanjir - BPBD Kabupaten Bandung
    </footer>

</body>
</html>