<!DOCTYPE html>
<html>
<head>
    <title>CRUD Book Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
        }
        .card-gradient {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            color: white;
        }
        .card-gradient-2 {
            background: linear-gradient(45deg, #2193b0, #6dd5ed);
            color: white;
        }
        .badge-stock {
            background-color: #17a2b8;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand">CRUD Book Laravel</span>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>