<!DOCTYPE html>
<html lang="en">

<head>
     <?php view('header', ['title' => 'Contact']); ?>
    
    <style>
    
</style>

</head>

<body>
   <?php view('navbar'); ?>

      <!-- ============================
     GET IN TOUCH SECTION
=============================== -->
    <section class="my-5 py-5" style="background:#f5f7ff;">
        <div class="container text-center">

            <!-- TOP SMALL PARAGRAPH -->
            <p class="text-primary fw-semibold mb-1" style="letter-spacing: 1px;">
                Get in Touch
            </p>

            <!-- MAIN HEADING -->
            <h2 class="fw-bold mb-3" style="color:#1e3a8a;">
                Need <span style="color:#3b82f6;">Help?</span>
            </h2>

            <!-- DESCRIPTION -->
            <p class="mb-5" style="max-width: 750px; margin:0 auto; color:#333;">
                Our customer care team is here to assist you with any questions related to
                your account, MCQ practice modules, exam preparation guidance, and more.
                Reach out to us anytime — we are happy to help you succeed.
            </p>

            <div class="row g-4 mt-4">

                <!-- LEFT SIDE CONTACT INFO -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow-sm text-start" 
                         style="background: rgba(255,255,255,0.85);">

                        <!-- SUB HEADING -->
                        <h4 class="fw-bold mb-3" style="color:#1e3a8a;">Contact Information</h4>

                        <!-- PHONE -->
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-telephone-fill me-3" 
                               style="font-size:28px; color:#6366f1;"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Phone</h6>
                                <p class="mb-0">+91 98765 43210</p>
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-fill me-3" 
                               style="font-size:28px; color:#6366f1;"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="mb-0">support@example.com</p>
                            </div>
                        </div>

                        <!-- ALTERNATE EMAIL -->
                        <div class="d-flex align-items-start mb-3">
                            <i class="bi bi-envelope-paper-fill me-3" 
                               style="font-size:28px; color:#6366f1;"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Helpline Email</h6>
                                <p class="mb-0">helpdesk@example.com</p>
                            </div>
                        </div>

                        <!-- ADDRESS -->
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-geo-alt-fill me-3"
                               style="font-size:28px; color:#6366f1;"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Address</h6>
                                <p class="mb-0">123 Park Street, Kolkata, West Bengal</p>
                            </div>
                        </div>

                        <!-- CUSTOMER CARE HOURS -->
                        <h5 class="fw-bold mb-2" style="color:#1e3a8a;">Customer Care Hours</h5>
                        <p class="mb-1"><strong>Monday – Friday:</strong> 9:00 AM – 7:00 PM</p>
                        <p class="mb-1"><strong>Saturday:</strong> 10:00 AM – 5:00 PM</p>
                        <p class="mb-0"><strong>Sunday:</strong> Closed</p>
                    </div>
                </div>

                <!-- RIGHT SIDE FORM -->
                <div class="col-md-6">
                    <div class="p-4 rounded shadow-sm text-start"
                         style="background: rgba(255,255,255,0.85);">

                        <h4 class="fw-bold mb-4" style="color:#1e3a8a;">
                            Send Us a Message
                        </h4>

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="fw-semibold">Name</label>
                            <input type="text" class="form-control" placeholder="Your Full Name">
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="fw-semibold">Address</label>
                            <input type="text" class="form-control" placeholder="Your Address">
                        </div>

                        <!-- Contact + Email -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="fw-semibold">Contact Number</label>
                                <input type="text" class="form-control" placeholder="Your Contact Number">
                            </div>
                            <div class="col-md-6">
                                <label class="fw-semibold">Email</label>
                                <input type="email" class="form-control" placeholder="Your Email Address">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="fw-semibold">How can we help?</label>
                            <textarea class="form-control" rows="4"
                                      placeholder="Describe your issue or question..."></textarea>
                        </div>

                        <!-- Button -->
                        <button class="btn btn-primary w-100 py-2 fw-semibold"
                                style="background:#3b82f6; border:none;">
                            <i class="bi bi-send-fill me-2"></i>Send Message
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </section>

         
   	  <?php view('footer'); ?>

    <!-- Bootstrap JS -->
   

</body>

</html>
