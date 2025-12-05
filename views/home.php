<!DOCTYPE html>
<html lang="en">

<head>
  <?php view('header', ['title' => 'Home']); ?>
    
    <style>
    
</style>

</head>

<body>
   <?php view('navbar'); ?>

   <!-- 🔥 Carousel Section -->
        
        
        
        <section class="my-4 px-4" 
             style="background: linear-gradient(to right, #6366f1, #a855f7); color: #fff !important; padding: 60px 0;">

            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT SIDE CONTENT -->
                    <div class="col-md-6 mb-4">
                        <h2 class="fw-bold">GCETTS Board MCQ Tests</h2>
                       <p class="mt-3">
                            Prepare for your board exams with our comprehensive MCQ tests. 
                            Practice Computer Science and boost your confidence. 
                            Get instant results with detailed explanations for every question. 
                            Track your progress and identify areas that need improvement. 
                            Improve your accuracy with timed mock tests designed for real exam conditions.
                        </p>

                        <div class="mt-4 d-flex gap-3">
                            <a href="#" class="btn btn-light px-4 py-2 fw-bold">Register Now</a>
                            <a href="#" class="btn btn-outline-light px-4 py-2 fw-bold">Learn More</a>
                        </div>
                    </div>

                   <!-- RIGHT SIDE IMAGE -->
                    <div class="col-md-6 text-center mt-5">
                        <img src="https://picsum.photos/500/350"
                             alt="Education" class="img-fluid rounded shadow">
                    </div>


                </div>
            </div>

        </section>
    
    
    <section class="py-5" style="background: #f5f7ff;">
        <div class="container text-center">

            <!-- TOP SMALL PARAGRAPH -->
            <p class="text-primary fw-semibold mb-1" style="letter-spacing: 1px;">
                Why Choose Us
            </p>

         <!-- MAIN HEADING -->
            <h2 class="fw-bold mb-3" style="color: #1e3a8a;">
                Comprehensive <span style="color:#3b82f6;">MCQ Practice</span> Platform
            </h2>

            <!-- DESCRIPTION PARAGRAPH -->
            <p class="mb-5" style="max-width: 700px; margin: 0 auto; color:#333;">
                Everything you need to excel in your West Bengal board exam with 
                structured practice tests and intelligent performance analysis.
            </p>

            <!-- THREE HORIZONTAL CARDS -->
            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm" 
                         style="background: rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-journal-check" 
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Board-Level Questions</h5>
                        <p>High-quality MCQs designed for West Bengal board standards.</p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm" 
                         style="background: rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-bar-chart-line-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Performance Tracking</h5>
                        <p>Analyze your weak areas with real-time progress reports.</p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm" 
                         style="background: rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-lightning-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Instant Results</h5>
                        <p>Get instant test results with explanations for every answer.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <!-- ============================
     STRUCTURED PRACTICE SECTION
=============================== -->
    <section class="py-5" style="background:#f5f7ff;">
        <div class="container text-center">

            <!-- TOP SMALL PARAGRAPH -->
            <p class="text-primary fw-semibold mb-1" style="letter-spacing:1px;">
                Structured Practice Tests
            </p>

         

            <!-- SIX BOX GRID -->
            <div class="my-4 row g-4">

                <!-- BOX 1 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-calculator-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Mathematics</h5>
                        <p>
                            Algebra, Geometry, Number System, and more curated for the WB Board syllabus.
                        </p>
                    </div>
                </div>

                <!-- BOX 2 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-flower3"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Life Science</h5>
                        <p>
                            Improve your understanding of biological concepts with well-structured MCQs designed 
                        </p>
                    </div>
                </div>

                <!-- BOX 3 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-lightbulb-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Physical Science</h5>
                        <p>
                            Physics and Chemistry questions to strengthen your fundamentals for board examinations.
                        </p>
                    </div>
                </div>

                <!-- BOX 4 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-calendar-check-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Flexible Scheduling</h5>
                        <p>
                            Choose your preferred time and take tests at your convenience without any limitations.
                        </p>
                    </div>
                </div>

                <!-- BOX 5 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-hourglass-split"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">1-Hour Tests</h5>
                        <p>
                            Timed assessments to help you improve speed and accuracy while simulating real exam pressure.
                        </p>
                    </div>
                </div>

                <!-- BOX 6 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm"
                         style="background:rgba(255,255,255,0.8);">
                        <div class="mb-3">
                            <i class="bi bi-shield-lock-fill"
                               style="font-size:40px; color:#6366f1;"></i>
                        </div>
                        <h5 class="fw-bold">Secure and Reliable</h5>
                        <p>
                            All tests are secured with advanced systems to ensure smooth and uninterrupted practice sessions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
      <?php view('footer'); ?>



</body>

</html>
