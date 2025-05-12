<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <!-- Bootstrap 5 CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {  
            background-color: #f8f9fa;
        }

        .register-container {
            min-height: 100vh;
        }

        .register-card {
            max-width: 1200px;
            margin: auto;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #0d6efd;
            color: white;
            padding: 0.4rem 1.5rem;
            font-size: 0.95rem;
            border-radius: 0.5rem;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
        }

        .error-msg {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }
    </style>
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center register-container">
        <div class="card register-card p-4">
            <h3 class="text-center mb-4">Register</h3>
            <form id="registerForm" action="login-submit" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-control"
                            placeholder="John" >
                        <div class="error-msg" id="firstNameError"></div>
                        </div>
                    <div class="col">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="form-control"
                            placeholder="Doe" >
                        <div class="error-msg" id="lastNameError"></div>
                        </div>
                    </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="example@email.com" >
                    <div class="error-msg" id="emailError"></div>
                    </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="****"
                        >
                    <div class="error-msg" id="passwordError"></div>
                    </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-custom">Register</button>
                    </div>
                </form>
            </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Simple JavaScript validation -->
    

</body>

</html>