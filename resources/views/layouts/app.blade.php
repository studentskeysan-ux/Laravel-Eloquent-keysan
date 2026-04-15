<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Karyawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b 40%, #e2e8f0 100%);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .navbar {
            backdrop-filter: blur(10px);
        }

        .custom-card {
            border: 0;
            border-radius: 20px;
            overflow: hidden;
        }

        .card-body {
            padding: 24px;
        }

        .table thead th {
            background: #111827;
            color: #fff;
            border-color: #111827;
        }

        .table {
            margin-bottom: 0;
        }

        .btn, .form-control, .form-select {
            border-radius: 12px;
        }

        .page-wrap {
            padding: 32px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('karyawan.index') }}">Laravel Eloquent CRUD</a>
        </div>
    </nav>

    <div class="container page-wrap">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>