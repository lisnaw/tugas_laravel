<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #abc8e2;">

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
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="hero" style="background-color: #91bbe7; color: white; padding: 60px 0; text-align: center; width: 100%; height: 50vh; display: flex; align-items: center; justify-content: center; margin: 0;">
    <div class="container" style="max-width: 2140px; width: 100%;">
        <h1>Hallow</h1>
        <h2>Selamat Datang</h2>
        <p>"Bergabunglah dengan kami dan temukan cara baru untuk menjelajahi dunia digital."</p>
        <a href="#features" class="btn btn-light btn-lg">Get Started</a>
    </div>
</div>



<section id = "features" style="margin: 0; padding: 0; background-color: #f0f0f0; height: 50vh; display: flex; flex-direction: column; justify-content: center;">
    <h2 class="text-center" style="margin-top: 40px;">Features</h2>
    <div class="row" style="align-items: center; height: 100%; margin: 0;">
        <div class="col-md-4" style="display: flex; justify-content: center;">
            <div class="card" style="margin-bottom: 20px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Description for feature 1 goes here. This feature is amazing!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: flex; justify-content: center;">
            <div class="card" style="margin-bottom: 20px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Description for feature 2 goes here. This feature is fantastic!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: flex; justify-content: center;">
            <div class="card" style="margin-bottom: 20px; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Description for feature 3 goes here. This feature is incredible!</p>
                </div>
            </div>
        </div>
    </div>
</div>

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
