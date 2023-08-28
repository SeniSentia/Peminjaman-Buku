<!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Perpustakaan Tasikmalaya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    @livewireStyles
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- ... -->
 
</head>

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <header id="header" class="fixed-top" style="background: #3F2305;color:white">
        <div class="container d-flex align-items-center justify-content-between">
        <h3 style="display: flex; align-items: center; gap: 10px;">
    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.2483 3.75166C18.09 1.5 15.1033 0.286662 12 0.333329C8.89666 0.286662 5.92166 1.5 3.76333 3.75166C1.5 5.91 0.286662 8.89666 0.333329 12C0.286662 15.1033 1.5 18.0783 3.75166 20.2367C5.91 22.5 8.89666 23.7133 12 23.6667C15.1033 23.7133 18.0783 22.5 20.2367 20.2483C22.5 18.09 23.7133 15.1033 23.6667 12C23.7133 8.89666 22.5 5.91 20.2483 3.75166ZM17.8333 12V19H13.75V13.1667H10.25V19H6.16666V12H3.83333L12 3.83333L20.75 12H17.8333Z" fill="#CCCCCC"/>
    </svg>
    <a href="/" style="color: white; text-decoration: none;">SIPERTAS</a>
</h3>

            <nav id="navbar" class="navbar" style="color:white">
                <ul>
                    <li><a class="nav-link scrollto active" style="color:white"href="/">Home</a></li>
                    <li><a class="nav-link scrollto active" style="color:white" href="/borrow">Arsip Peminjaman</a></li>
                    @auth
                        @role('admin')
                            <li><a class="getstarted scrollto" style="color:white" href="/dashboard">Dashboard</a></li>
                        @else
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button type="submit" style="color:white" class="getstarted scrollto">logout</button></li>
                            </form>
                        @endrole
                        
                    @endauth
                    @guest
                        <li><a class="getstarted scrollto" href="/login">Login</a></li>
                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <main id="main">

        {{ $slot }}

    </main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @livewireScripts
    @stack('modals')
    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
