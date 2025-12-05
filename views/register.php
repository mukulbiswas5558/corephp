<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('header', ['title' => 'Register']); ?>
    <style>
        .register-img {
            height: 100vh;
            object-fit: cover;
        }
        .input-error {
            border: 2px solid red !important;
        }

        .error-text {
            color: red;
            font-size: 13px;
        }
        
    
    </style>

</head>

<body>
   <?php view('navbar'); ?>

 	<!-- =============================
     REGISTRATION PAGE
============================== -->
<div class="container mt-5 pt-5 mb-5">

    <!-- 🔵 TAB NAVIGATION -->
    <ul class="nav nav-tabs justify-content-center" id="regTabs">
        <li class="nav-item">
            <a class="nav-link active fw-bold" id="details-tab" data-bs-toggle="tab" href="#details"
               style="color:#1e3a8a;">1. Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold" id="confirm-tab" data-bs-toggle="tab" href="#confirm"
               style="color:#1e3a8a;">2. Confirm</a>
        </li>
    </ul>

    <!-- =============================
         TAB CONTENT
    ============================== -->
    <div class="tab-content mt-4">

        <!-- =======================
             1️⃣ DETAILS FORM
        ======================== -->
        <div class="tab-pane fade show active" id="details">

            <h3 class="fw-bold" style="color:#1e3a8a;">Student Registration</h3>
            <p class="text-muted">Fill in your details to register for the MCQ tests.</p>

            <div class="card border-0 shadow-sm p-4">

               <!-- Student Name -->
                <label class="form-label fw-semibold">
                    <i class="fa-solid fa-user-graduate me-2 text-primary"></i> Student Name
                </label>
                <input type="text" id="studentName" class="form-control mb-1" placeholder="Enter student name">
                <small id="err_studentName" class="error-text d-none mb-3"></small>

                <!-- School Name -->
                <label class="form-label fw-semibold">
                    <i class="fa-solid fa-school me-2 text-primary"></i> School Name
                </label>
                <input type="text" id="schoolName" class="form-control mb-1" placeholder="Enter school name">
                <small id="err_schoolName" class="error-text d-none mb-3"></small>

                <!-- Contact Number -->
                <label class="form-label fw-semibold">
                    <i class="fa-solid fa-phone me-2 text-primary"></i> Contact Number
                </label>
                <input type="text" id="contactNumber" class="form-control mb-1" placeholder="Enter mobile number">
                <small id="err_contactNumber" class="error-text d-none mb-3"></small>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Class -->
                        <label class="form-label fw-semibold">
                            <i class="fa-solid fa-layer-group me-2 text-primary"></i> Class
                        </label>
                        <select id="classSelect" class="form-select mb-1">
                            <option selected disabled>Select Class</option>
                            <option value="11">Class 11</option>
                            <option value="12">Class 12</option>
                        </select>
                        <small id="err_classSelect" class="error-text d-none mb-3"></small>
                    </div>

                    <div class="col-md-6">
                        <!-- Subject -->
                        <label class="form-label fw-semibold">
                            <i class="fa-solid fa-book-open me-2 text-primary"></i> Subject
                        </label>
                        <select id="subjectSelect" class="form-select mb-1">
                            <option selected disabled>Select Subject</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                        </select>
                        <small id="err_subjectSelect" class="error-text d-none mb-3"></small>
                    </div>
                </div>

                <!-- Payable Amount -->
                <label class="form-label fw-semibold mt-2">
                    <i class="fa-solid fa-indian-rupee-sign me-2 text-primary"></i> Payable Amount
                </label>
                <input type="text" class="form-control mb-4" id="payAmount" value="499" readonly>

                <!-- Continue Button -->
                <button class="btn btn-primary w-100 fw-semibold" id="continueBtn"
                    style="background: linear-gradient(to right, #6366f1, #a855f7); border:none;">
                    Continue to Review
                </button>

            </div>

        </div>

        <!-- =======================
             2️⃣ CONFIRM SCREEN
        ======================== -->
       <div class="tab-pane fade" id="confirm">

            <h3 class="fw-bold" style="color:#1e3a8a;">Review Your Details</h3>
            <p class="text-muted">Confirm your registration details.</p>

            <div class="card border-0 shadow-sm p-4">

                <!-- Student Name -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-user-graduate me-2 text-primary fs-5"></i>
                        <span class="fw-semibold">Student Name</span>
                    </div>
                    <span id="r_studentName" class="fw-bold text-dark"></span>
                </div>

                <!-- School Name -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-school me-2 text-primary fs-5"></i>
                        <span class="fw-semibold">School Name</span>
                    </div>
                    <span id="r_schoolName" class="fw-bold text-dark"></span>
                </div>

                <!-- Contact Number -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-phone me-2 text-primary fs-5"></i>
                        <span class="fw-semibold">Contact Number</span>
                    </div>
                    <span id="r_contactNumber" class="fw-bold text-dark"></span>
                </div>

                <!-- Classes & Subjects -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-layer-group me-2 text-primary fs-5"></i>
                                <span class="fw-semibold">Class</span>
                            </div>
                            <span id="r_classSelect" class="fw-bold text-dark"></span>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-book-open me-2 text-primary fs-5"></i>
                                <span class="fw-semibold">Subject</span>
                            </div>
                            <span id="r_subjectSelect" class="fw-bold text-dark"></span>
                        </div>
                    </div>

                </div>

                <!-- Payable Amount -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-indian-rupee-sign me-2 text-primary fs-5"></i>
                        <span class="fw-semibold">Payable Amount</span>
                    </div>
                    <span id="r_payAmount" class="fw-bold text-dark"></span>
                </div>

                <!-- Final Submit Button -->
                <button class="btn w-100 fw-semibold text-white"
                    id="finalSubmit"
                    style="background: linear-gradient(to right, #3b82f6, #6366f1); border:none;">
                    Submit Registration
                </button>

            </div>
        </div>

    </div>

</div>

<!-- =============================
     JS — TAB SWITCHING + DATA COPY
============================== -->


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
     const BASE_URL='<?= BASE_URL ?>';
    $(document).ready(function () {

        function showError(inputId, errorId, message) {
            $("#" + inputId).addClass("input-error");
            $("#" + errorId).removeClass("d-none").text(message);
        }

        function clearError(inputId, errorId) {
            $("#" + inputId).removeClass("input-error");
            $("#" + errorId).addClass("d-none");
        }

        // Continue Button
        $("#continueBtn").click(function () {

            let valid = true;

            let studentName = $("#studentName").val()?.trim() || "";
            let schoolName = $("#schoolName").val()?.trim() || "";
            let contactNumber = $("#contactNumber").val()?.trim() || "";
            let classSelect = $("#classSelect").val();
            let subjectSelect = $("#subjectSelect").val();
            let payAmount = $("#payAmount").val();

            // Validation
            if (studentName === "") { showError("studentName", "err_studentName", "Student name is required"); valid = false; }
            else { clearError("studentName", "err_studentName"); }

            if (schoolName === "") { showError("schoolName", "err_schoolName", "School name is required"); valid = false; }
            else { clearError("schoolName", "err_schoolName"); }

            if (contactNumber.length !== 10) { showError("contactNumber", "err_contactNumber", "Enter valid 10-digit number"); valid = false; }
            else { clearError("contactNumber", "err_contactNumber"); }

            if (!classSelect) { showError("classSelect", "err_classSelect", "Please select a class"); valid = false; }
            else { clearError("classSelect", "err_classSelect"); }

            if (!subjectSelect) { showError("subjectSelect", "err_subjectSelect", "Please select a subject"); valid = false; }
            else { clearError("subjectSelect", "err_subjectSelect"); }

            if (!valid) return;

            // Fill Review Tab
            $("#r_studentName").text(studentName);
            $("#r_schoolName").text(schoolName);
            $("#r_contactNumber").text(contactNumber);
            $("#r_classSelect").text(classSelect);
            $("#r_subjectSelect").text(subjectSelect);
            $("#r_payAmount").text(payAmount);

            $("#confirm-tab").tab("show");
        });

        // Final Submit
        $("#finalSubmit").click(function () {

            let studentName = $("#studentName").val()?.trim() || "";
            let schoolName = $("#schoolName").val()?.trim() || "";
            let contactNumber = $("#contactNumber").val()?.trim() || "";
            let classSelect = $("#classSelect").val()?.trim() || "";
            let subjectSelect = $("#subjectSelect").val()?.trim() || "";
            let payAmount = $("#payAmount").val()?.trim() || "";

            if (!studentName || !schoolName || !contactNumber || !classSelect || !subjectSelect || !payAmount) {
                swal.fire("Error", "All fields are required!", "error");
                return;
            }

            $.ajax({
                url: `${BASE_URL}/registerSubmit`,
                method: "POST",
                data: {
                    student_name: studentName,
                    school_name: schoolName,
                    contact_number: contactNumber,
                    class: classSelect,
                    subject: subjectSelect,
                    amount: payAmount
                },
                success: function (response) {

                    try { response = JSON.parse(response); } 
                    catch (e) {
                        swal.fire("Error", "Invalid server response!", "error");
                        return;
                    }

                    if (response.status === "error") {
                        swal.fire("Error", response.message, "error");
                        return;
                    }

                    swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.reload();
                    });
                },

                error: function () {
                    swal.fire("Server Error", "Something went wrong!", "error");
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

</html>
