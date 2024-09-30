<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid rgb(255, 255, 255);
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #85a3ca;
        }
    </style>

<body style="background-color: #a3cdf1;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ba" id="navbarNav" >
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabelbuku">daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="hero" style="background-color: #91bbe7; color: white; padding: 60px 0; text-align: center; width: 100%; height: 60vh; display: flex; align-items: center; justify-content: center; margin: 0;">
    <div class="container" style="max-width: 2140px; width: 100%;">
        <h1>Hallow</h1>
        <h2>Selamat Datang</h2>
        <p>"Bergabunglah dengan kami dan temukan cara baru untuk menjelajahi dunia digital."</p>
        <a href="#tabelbuku" class="btn btn-light btn-lg">Lihat Selengkapnyua</a>
    </div>
</div>


{{-- table buku --}}
<section id="tabelbuku">
    <h1 style="text-align: center; padding: 60px 0;">Daftar Buku</h1>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $index => $book)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $book['title'] }}</td>
            <td>{{ $book['author'] }}</td>
            <td>{{ $book['year'] }}</td>
        </tr>
        @endforeach
    </tbody>
</section>
</table>

<!-- Tampilkan pesan dari form jika ada -->
    @if(session('message'))
        <div class="alert alert-danger mt-4" style="background-color:#8ed3f3; ">
            <h4>Pesan dari Form:</h4>
            <p>{{ session('message') }}</p>
        </div>
    @endif



<!-- Copyright -->
 <footer class="bg-dark text-white text-center text-lg-start">
        <div class="text-center p-3">
            © 2024 Copyright:
            <a class="text-white" href="instagram.com/tyy.eliss__">@tyy.eliss__</a>
        </div>
    </footer>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
