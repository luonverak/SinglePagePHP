<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="post">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a id="home" class="nav-link px-lg-3 py-3 py-lg-4">Home</a></li>
                        <li class="nav-item"><a id="about" class="nav-link px-lg-3 py-3 py-lg-4">About</a>
                        </li>
                        <li class="nav-item"><a id="post" class="nav-link px-lg-3 py-3 py-lg-4">Sample Post</a>
                        </li>
                        <li class="nav-item"><a id="contact" class="nav-link px-lg-3 py-3 py-lg-4">Contact</a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $("#home").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#home-page").offset().top
                }, 100);
            });
            $("#about").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#about-block").offset().top
                }, 100);
            });
            $("#post").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#simple-post").offset().top
                }, 100);
            });
            $("#contact").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#contact-block").offset().top
                }, 100);
            });
        })
    </script>