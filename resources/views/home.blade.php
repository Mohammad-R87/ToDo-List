<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>App Name - Home</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
        <!-- FontAwesome -->
        <link rel="stylesheet" href="../../fonts/fontawesome/css/all.min.css" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="../css/home.css" />
    </head>

    <body>
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
        <header id="header" class="d-flex flex-column justify-content-center">
            <nav id="navbar" class="navbar nav-menu">
                <ul>
                    <li>
                        <a href="#hero" class="nav-link scrollto active"><i class="fas fa-home"></i> <span>Home</span></a>
                    </li>
                    <li>
                        <a href="/login" class="nav-link scrollto"><i class="fas fa-user-alt"></i> <span>Login</span></a>
                    </li>
                    <li>
                        <a href="#Follow-Up" class="nav-link scrollto"><i class="fas fa-file"></i> <span>Follow Up</span></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/mashhad.repair?igshid=YmMyMTA2M2Y=" target="_blank" class="nav-link scrollto"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
                    </li>
                </ul>
            </nav>
        </header>

        <section id="hero" class="d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <h1>Mashhad Tamir</h1>
                <p>I am a <span class="typed" data-typed-items="repairman"></span></p>
            </div>
        </section>

        <main id="main">
            <section id="Follow-Up" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Follow Up</h2>
                    </div>

                    <div class="row mt-1">
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Sanai Street, Sahib Zaman Square, Subhan Complex, Negative Floor 1, Unit 36</p>
                                </div>

                                <div class="email">
                                    <i class="fas fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>alihematpor9900@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="fas fa-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+98 9383275955</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="code" placeholder="Enter code..." required />
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Follow Up</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <script src="../js/home.js"></script>
    </body>
</html>
