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
    <footer class="footer mt-auto bg-dark text-white text-center py-3">
        &copy; 2024 Outdoor Recreation Management. All Rights Reserved.
    </footer>
    <style>
        .footer {
            background-color: rgba(0, 0, 0, 0.9); /* Slightly transparent background */
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            font-size: 1rem;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.5); /* Subtle shadow for depth */
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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
