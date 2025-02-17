<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!--CSS LAINNYA-->
    <style>
        body {
            width: 100%;
        }
        .jumbotron{
            padding: 6rem 1rem;
            background: #e2edff;
        }
        .jumbotron img {
            height: 150px;
            width: 150px;
        }
        .nav-link{
            color: white;
        }

        #projects{
            background: #e2edff;
        }

        section{
            padding-top: 5rem;
        }
    </style>
<title>Maulaanaa Yahya - <?php echo e($title); ?></title>
</head>
<body>
    <?php $__env->startSection('navbar'); ?>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Maulaanaa Yahya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link active" href="/about">About</a>
                    <a class="nav-link active" href="/project">Projects</a>
                    <a class="nav-link active" href="/contact">Contact</a>
                </div>
            </div>
        </div>  
    </nav>
    <!--End of navbar-->
    <?php echo $__env->yieldSection(); ?>

    
    <?php echo $__env->yieldContent('content'); ?>
    

    <?php $__env->startSection('footer'); ?>
    <!--Footer-->
        <footer class="bg-primary text-white text-center p-3">
            <p>Made with ❤ by <a href="#" class="text-white fw-bold">Maulaanaa Yahya</a></p>
        </footer>
    <!--End of footer-->
    <?php echo $__env->yieldSection(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\tugas\12RPL2\Pemrograman Web\Laravel\tugas2\resources\views/layouts/portfolio.blade.php ENDPATH**/ ?>