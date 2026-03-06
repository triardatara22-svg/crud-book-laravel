<!DOCTYPE html>
<html>
<head>
    <title>CRUD Book Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#ffe6f0;">

<nav class="navbar navbar-dark" style="background:#ff1493;">
    <div class="container">
        <span class="navbar-brand fw-bold">CRUD Book Laravel</span>
        <div>
            <a href="{{ route('books.index') }}" class="btn btn-light me-2">Books</a>
            <a href="{{ route('categories.index') }}" class="btn btn-warning">Categories</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>