<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cssfiles/admin.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          background-size: cover;
          min-height: 100vh;
          background-image: url('{{ asset('images/6.jpg') }}');
          background-repeat: no-repeat;
       
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            font-size: 1.5rem;
            color: #fff;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link:hover {
            color: #ccc;
        }
        .sidebar {
            background-color: #343a40;
            height: 100vh;
            display: inline;
            padding-top: 6rem;
            margin-right: 16rem;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 3rem;
        }
        .card {
            margin-bottom: 1rem;
        }
        .mt-4{
            color: white;
            font-size: 65px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('home') }}" method="GET">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="color: white;">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex">
        <div class="sidebar bg-dark">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="recreations/create">Register Recreation</a>
            <a href="#">Approve/Disapprove Recreation</a>
            <a href="#">Manage Recreation</a>
            <a href="#">View Service Requests</a>
        </div>
    </div>
 <div class="content">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Recreations</h5>
                            <p class="card-text">42</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Pending Approvals</h5>
                            <p class="card-text">12</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Service Requests</h5>
                            <p class="card-text">8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
