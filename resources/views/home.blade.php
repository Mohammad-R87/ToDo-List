<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>App Name - Home</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
    <!-- Template CSS -->
    <link href="../css/home.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo.png" alt="">
                <span>ToDo List</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="getstarted scrollto" href="#about">Register</a></li>
                    <li><a class="getstarted scrollto" href="#about">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <div class="col-md-2 mobile">
                <a class="btn-in " href="#about">Register</a>
                <a class="btn-in" href="#about">Login</a>
            </div>
        </div>
    </header>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with
                        Bootstrap
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="footer-newsletter">
                            <div class="col-lg-12">
                                <form action="" method="post">
                                    <input type="text" name="code" placeholder="Enter code...">
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="../assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <script src="../js/home.js"></script>

</body>

</html>
