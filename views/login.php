<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('header', ['title' => 'Login']); ?>
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

                     <button type="submit" 
                            class="btn w-100 mt-2"
                            style="
                                background: linear-gradient(to right, #6366f1, #a855f7);
                                color:#fff;
                                font-weight:600;
                                border:none;
                                border-radius:14px;
                                padding:10px 20px;
                                box-shadow:0 4px 12px rgba(99,102,241,0.4);
                                transition:all 0.3s ease;
                            ">
                        Login
                    </button>

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
                                window.location.href = "admin";
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
   <script>
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        const openIcon = document.querySelector('.nav-open-icon');
        const closeIcon = document.querySelector('.nav-close-icon');

        openIcon.classList.toggle('d-none');
        closeIcon.classList.toggle('d-none');
    });
	</script>
</body>
