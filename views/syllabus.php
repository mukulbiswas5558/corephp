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

   <!-- 🔥 Carousel Section -->
    <div style="margin-top: 90px;" class="px-4"> 
        <div id="homeCarousel" 
            class="carousel slide carousel-fade mx-auto rounded-4 shadow-lg overflow-hidden"
            data-bs-ride="carousel"
            data-bs-interval="3000">   <!-- Auto slide every 3 sec -->

            <!-- Slides -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/8579f06b-2a1d-41c6-8544-3bed70091d1a.png"
                        class="d-block w-100 img-fluid custom-banner" alt="Banner 1">
                </div>

                <div class="carousel-item">
                    <img src="https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/4c3b1416-fcf0-460e-9019-1b34d0eb42d9.png"
                        class="d-block w-100 img-fluid custom-banner" alt="Banner 2">
                </div>

                <div class="carousel-item">
                    <img src="https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/e0cb980c-300a-4162-995a-511b17eb2080.png"
                        class="d-block w-100 img-fluid custom-banner" alt="Banner 3">
                </div>

                <div class="carousel-item">
                    <img src="https://s3.ap-south-1.amazonaws.com/develop.chesta.in/banners/11b329a0-44c2-4a92-919c-6bd347fd6512.png"
                        class="d-block w-100 img-fluid custom-banner" alt="Banner 4">
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
