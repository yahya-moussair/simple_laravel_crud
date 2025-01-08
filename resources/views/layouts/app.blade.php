<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
        }
        .card {
            margin-bottom: 20px;
        }
        .btn-primary, .btn-warning, .btn-danger {
            border-radius: 25px;
            padding: 10px 20px;
            text-transform: uppercase;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .card-body {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .alert {
            margin-top: 20px;
        }
        h1 {
            font-size: 2rem;
            color: #343a40;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-label {
            font-weight: bold;
        }
        .list-group-item {
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .list-group-item:hover {
            background-color: #f1f1f1;
        }
        .container .mb-3 {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: #fff;
            border-radius: 5px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>
    <div class="footer">
        <p>&copy; 2024 Laravel Blog</p>
    </div>
</body>
</html>
