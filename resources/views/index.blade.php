<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>App Name - @yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <style>
        .hidden {
            display: none;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Histories
                            </div>
                            <div class="search-item">
                                <a href="#">How to hack NASA using CSS</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Kodinger.com</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">#Stisla</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Result
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../img/products/product-3-50.png"
                                        alt="product">
                                    oPhone S9 Limited Edition
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../img/products/product-2-50.png"
                                        alt="product">
                                    Drone X2 New Gen-7
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../img/products/product-1-50.png"
                                        alt="product">
                                    Headphone Blitz
                                </a>
                            </div>
                            <div class="search-header">
                                Projects
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-danger text-white mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    Stisla Admin Template
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-primary text-white mr-3">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    Create a new Homepage Design
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Psycho</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">ToDo List</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">TL</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="/dashboard" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="/categories" class="nav-link"><i
                                    class="fas fa-th"></i><span>Categories</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                <span>Tasks</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/tasks">List Tasks</a></li>
                                <li><a class="nav-link" href="/tasks/store">Create Tasks</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
            </div>
            </section>
        </div>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../modules/jquery.min.js"></script>
    <script src="../modules/popper.js"></script>
    <script src="../modules/tooltip.js"></script>
    <script src="../modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../modules/moment.min.js"></script>
    <script src="../js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../js/page/components-table.js"></script>

    <!-- Template JS File -->
    <script src="../js/scripts.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        $(document).ready(function() {
            /**
             * for showing edit item popup
             */

            $(document).on('click', "#edit-item", function() {
                $(this).addClass(
                    'edit-item-trigger-clicked'
                ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

                var options = {
                    'backdrop': ''
                };
                $('#EditModal').modal(options)
            })

            // on modal show
            $('#EditModal').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
                var row = el.closest(".data-row");

                // get the data
                var id = el.data('item-id');
                var name = row.children(".name").text();
                var description = row.children(".description").text();

                // fill the data in the input fields
                $("#modal-input-id").val(id);
                $("#modal-input-name").val(name);
                $("#modal-input-description").val(description);

            })

            // on modal hide
            $('#EditModal').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })
        })





        
        $(document).ready(function() {

        $(document).on('click', "#info-item", function() {
                $(this).addClass(
                    'info-item-trigger-clicked'
                ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

                var options = {
                    'backdrop': ''
                };
                $('#ModalInfo').modal(options)
            })

            // on modal show
            $('#ModalInfo').on('show.bs.modal', function() {
                var el = $(".info-item-trigger-clicked"); // See how its usefull right here? 
                var row = el.closest(".data-row");

                // get the data
                var id = row.children(".id").text();
                var name = row.children(".name").text();
                var description = row.children(".description").text();
                var category = row.children(".category").text();
                var created = row.children(".created").text();
                var updated = row.children(".updated").text();
                var done = row.children(".done").text();

                // fill the data in the input fields
                $("#info-id").val(id);
                $("#info-name").val(name);
                $("#info-description").val(description);
                $("#info-category").val(category);
                $("#info-created").val(created);
                $("#info-updated").val(updated);
                $("#info-done").val(done);

            })

            // on modal hide
            $('#ModalInfo').on('hide.bs.modal', function() {
                $('.info-item-trigger-clicked').removeClass('info-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })
        })
    </script>
</body>

</html>
