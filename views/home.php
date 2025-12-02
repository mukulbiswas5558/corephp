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

                <?php foreach ($banner as $index => $item): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <img src="<?= $item['image'] ?>"
                            class="d-block w-100 img-fluid custom-banner"
                            alt="<?= $item['title'] ?>">
                    </div>
                <?php endforeach; ?>

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
