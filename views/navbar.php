
    <?php
    // Set active link dynamically
    // Get URL path (example: /corephp/home)
    $path = trim($_SERVER['REQUEST_URI'], "/");

    // Remove project folder automatically
    $project = "corephp";
    $path = preg_replace("#^$project/#", "", $path);

    // If path empty → default home
    $currentPage = $path === "" ? "home" : $path;
   
    
    ?>
     <!-- Responsive Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top mobile-full-nav">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL . '/assets/gcetts courses-logo-transparent.png' ?>" alt="CHESTA Logo">
            <span class="ms-2 fw-bold">Gcetts Courses</span>
        </a>

        <!-- Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-expanded="false">
            <i class="fa-solid fa-bars nav-open-icon"></i>
            <i class="fa-solid fa-xmark nav-close-icon d-none"></i>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto my-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'home' ? 'active-menu' : '' ?>" 
                       href="<?= BASE_URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'register' ? 'active-menu' : '' ?>" 
                       href="<?= BASE_URL . '/register' ?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'contact' ? 'active-menu' : '' ?>" 
                       href="<?= BASE_URL . '/contact' ?>">Contact</a>
                </li>
            </ul>

            <!-- Right Buttons -->
            <div class="d-flex">
                <a href="<?= BASE_URL . '/login' ?>" class="btn-login me-3 text-decoration-none">
                    <i class="fa-solid fa-right-to-bracket me-2"></i> Log In
                </a>
                <a href="<?= BASE_URL . '/register' ?>" class="btn-register text-decoration-none">
                    <i class="fa-solid fa-user-plus me-2"></i> Register Now
                </a>
            </div>

        </div>
    </div>
</nav>