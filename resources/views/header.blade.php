<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor Recreation Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="{{ asset('images/logo1.jpg') }}">
            <h2 class="navbar-brand" >Outdoor Rec</h2>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Back</a>
                    </li>
                    
                   
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .container-fluid img{
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-left: 20px;
        }
        .navbar-brand{
            font-size: 40px;
            color: white;
            margin-left: 10px;
        }
        .navbar {
            background-color: rgb(97, 97, 193);
            height: 70px;width: 100%;

        }
        .nav-item a{
            font-size: 20px;
            color: white;
            margin-right: 30px;
        }
        .nav-item a:hover{
            background-color: rgb(138, 138, 238);
            cursor: pointer;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
