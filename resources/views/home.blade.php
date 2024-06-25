<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor Recreation Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('{{ asset('images/4.jpg') }}');
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
            padding-top: 0px; /* Adjusted for the height of the navbar */
        }
        .container-fluid img {
            height: 65px;
            width: 65px;
            border-radius: 50%;
            margin-left: 20px;
        }
        .navbar-brand {
            font-size: 30px;
            color: white;
            margin-left: 10px;
        }
        .navbar {
            background-color: rgb(97, 97, 193); /* Corrected the rgba value */
            height: 75px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .nav-item a {
            font-size: 20px;
            color: white;
        }
        .hero-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 4rem;
            color: white;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        .btn-primary {
            background-color: #28a745;
            border: none;
        }
        .btn-primary:hover {
            background-color: #218838;
        }
        .footer {
            background-color: rgb(97, 97, 193); /* Slightly transparent background */
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            font-size: 1rem;
            box-shadow: 0 -2px 5px rgb(97, 97, 193); /* Subtle shadow for depth */
        }
        .footer p {
            margin: 0;
        }
        @media (min-width: 768px) {
            .footer {
                font-size: 1.2rem; /* Larger text on larger screens */
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Logo">
            <h2 class="navbar-brand">Outdoor Rec</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div>
            <h1>Welcome to Outdoor Recreation Management</h1>
            <p>Experience the best outdoor activities and adventures.</p>
            <a href="/login" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>

    <footer class="footer mt-auto bg-dark text-white text-center py-3">
        &copy; 2024 Outdoor Recreation Management. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
