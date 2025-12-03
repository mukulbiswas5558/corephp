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
        .register-img {
            height: 100vh;
            object-fit: cover;
        }
        
    
    </style>

</head>

<body>
   <?php view('navbar'); ?>

   <!-- 🔥 Carousel Section -->
  
        <div class="mt-2 container-fluid">
        <div class="row">

            <!-- LEFT SIDE IMAGE -->
            <div class="col-md-6 d-none d-md-block p-0">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216"
                     class="register-img w-100" alt="Register Image">
            </div>

            <!-- RIGHT SIDE FORM -->
            <div class="col-md-6 d-flex align-items-center justify-content-center form-section">
                <div class="w-75">

                    <h2 class="mb-4 fw-bold text-center">Create Your Account</h2>

                    <form id="registerForm">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>

                        <!-- Mobile -->
                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                        </div>

                        <!-- State -->
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <select name="state" class="form-control">
                                <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-2">Register</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

    <script>
        const BASE_URL='<?= BASE_URL ?>';
    $("#registerForm").on("submit", function(e) {
        e.preventDefault(); // Stop normal form submit

        // Clear old errors
        $("small.text-danger").addClass("d-none").text("");

        let name = $("input[name=name]").val().trim();
        let email = $("input[name=email]").val().trim();
        let mobile = $("input[name=mobile]").val().trim();
        let password = $("input[name=password]").val().trim();
        let confirm = $("input[name=confirm_password]").val().trim();
        let state = $("select[name=state]").val();

        // -----------------------
        // Client Validation
        // -----------------------

        if (name.length < 3) {
            return swal.fire("Error", "Name must be at least 3 characters.", "error");
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            return swal.fire("Error", "Enter a valid email address.", "error");
        }

        if (!/^[0-9]{10}$/.test(mobile)) {
            return swal.fire("Error", "Mobile number must be 10 digits.", "error");
        }

        if (password.length < 6) {
            return swal.fire("Error", "Password must be at least 6 characters.", "error");
        }

        if (password !== confirm) {
            return swal.fire("Error", "Passwords do not match!", "error");
        }

        if (state === "") {
            return swal.fire("Error", "Please select your state.", "error");
        }

        // -----------------------
        // AJAX Submit
        // -----------------------

        $.ajax({
            url: `${BASE_URL}/registerSubmit`,
            method: "POST",
            data: {
                name: name,
                email: email,
                mobile: mobile,
                password: password,
                confirm_password: confirm,
                state: state
            },
            success: function(response) {

                console.log("RAW:", response);

                // Convert raw string to JSON object
                try {
                    response = JSON.parse(response);
                } catch (e) {
                    console.log("Invalid JSON:", e);
                    swal.fire("Error", "Server returned invalid response.", "error");
                    return;
                }

                console.log("PARSED:", response);

                if (response.status === "error") {
                    swal.fire("Error", response.message, "error");
                    return;
                }

                if (response.status === "success") {
                    swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = "/login";
                    });
                }
            },
            error: function() {
                swal.fire("Server Error", "Something went wrong!", "error");
            }
        });

    });
</script>
</html>
