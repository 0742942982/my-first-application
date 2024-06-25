<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODRMS</title>
    <link rel="stylesheet" href="{{ asset('form/css.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="form-bg">
    @if(session('registration_failed'))
        <script type="text/javascript">
            alert('This Account exists');
        </script>
    @endif

    <center>
        <div id="anno" class="content-wrapper">
            <form id="create_account" class="row g-3 needs-validation" action="{{ route('register_check') }}" method="POST" enctype="multipart/form-data" novalidate autocomplete="off">
                @csrf
                <div id="anno_title">
                    <h3 class="an_title">Create Account</h3>
                </div>

                <div id="userType" class="col-md-6 position-relative">
                    <label for="user_type" class="form-label">User Type</label>
                    <select name="user_type" id="user_type" class="form-select form-control" onchange="toggleField()" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach($user_types as $user_type)
                            <option value="{{ $user_type->id }}">{{ $user_type->type }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-tooltip">Please select a user type.</div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="fname" class="form-label">Full Name</label>
                    <input name="fname" type="text" class="form-control" id="fname" required>
                    <div class="valid-tooltip">Looks good!</div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select form-control" id="gender" name="gender" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <div class="invalid-tooltip">Please select a gender.</div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="phone" class="form-label">Phone</label>
                    <input name="phone" type="text" class="form-control" id="phone" required>
                    <div class="valid-tooltip">Looks good!</div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" required>
                    <div class="invalid-tooltip">Please provide a valid email.</div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                    <div class="invalid-tooltip">Please provide a password.</div>
                </div>

                <center>
                    <div id="sbmt_btn" class="col-md-6">
                        <button class="btn btn-success" type="submit" name="submit">Register</button>
                        <p>If you Have an account <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </center>
            </form>
        </div>
    </center>
    <footer>
        @include('footer')
      </footer>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-image: url('{{ asset('images/3.jpg') }}');
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
            padding-top: 0px;
       }
        /* Style adjustments */
       
       
        
        footer{
            height: 70px;
        }
        #sbmt_btn {
            width: 300px;
            margin-top: 10px;
        }
       #sbmt_btn p a{
         color: white;
         font-size: 20px;
       }
       #sbmt_btn p a:hover{
        background-color: blue;
        cursor: pointer;
       }
        
        #create_account {
            background-color: rgb(97, 97, 193);
            width: 40%;
            border-radius: 10px;
            padding-bottom: 10px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(202, 16, 152, 0.2);
            transition: 0.3s ease;
        }
       
    </style>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    });
</script>

</body>
</html>
