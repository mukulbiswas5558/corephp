<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL . '/assets/css/style.css' ?>">
    
    <style>
    
</style>

</head>
<body>
    <?php view('navbar'); ?>

    <div class="mt-2 container-fluid">
        <div class="row">

            <!-- LEFT SIDE IMAGE -->
            <div class="col-md-6 d-none d-md-block p-0">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d"
                     class="register-img w-100" alt="Login Image">
            </div>

            <!-- RIGHT SIDE LOGIN FORM -->
            <div class="col-md-6 d-flex align-items-center justify-content-center form-section">
                <div class="w-75">

                    <h2 class="mb-4 fw-bold text-center">Login to Your Account</h2>

                    <form id="loginForm">

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const BASE_URL='<?= BASE_URL ?>';
        $(document).ready(function () {
            $("#loginForm").submit(function (e) {
                e.preventDefault();
                

                let email = $("input[name='email']").val().trim();
                let password = $("input[name='password']").val().trim();

                // 🔥 Frontend Validation
                if (email === "") {
                    Swal.fire("Error", "Email is required", "error");
                    return;
                }
                if (password === "") {
                    Swal.fire("Error", "Password is required", "error");
                    return;
                }

                // 🔥 AJAX API Request
                $.ajax({
                    url: `${BASE_URL}/loginSubmit`,
                    type: "POST",
                    data: { email: email, password: password },
                    dataType: "json",

                    success: function (response) {
                        console.log(response);

                        if (response.status === "error") {
                            Swal.fire("Error", response.message, "error");
                            return;
                        }

                        if (response.status === "success") {
                            Swal.fire({
                                title: "Success!",
                                text: "Login Successful!",
                                icon: "success",
                                timer: 1500,
                                showConfirmButton: false
                            });

                            // Redirect after login
                            setTimeout(function () {
                                window.location.href = "dashboard.php";
                            }, 1500);
                        }
                    },

                    error: function () {
                        Swal.fire("Error", "Something went wrong!", "error");
                    }
                });
            });
        });
    </script>

</body>