<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dinas PKPLH Maros</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top header">
    <div class="container d-flex align-items-center justify-content-between position-relative">
        
        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>PKPLH</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        
        @include('components.navbar')
        
    </div>
</header><!-- End Header -->

<body>
    <main id="main">
        <section class="contact" style="background-image: url('assets/img/cta-bg.jpg'); background-size: cover;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow"
                            style="border-radius: 1rem; background-color: rgba(255, 255, 255, 0.2); backdrop-filter: blur(3px);">
                            <div class="card-body p-5 text-center">

                                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                                    <h2>AdminPKPLH</h2>
                                </div>

                                <form action="{{ route('formlogin') }}" method="post" class="">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <input type="text" name="username" class="form-control"
                                            value="{{ old('username') }}"placeholder="Username" autofocus required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <input type="password" name="password" class="form-control "
                                            placeholder="Password" required>
                                    </div>

                                    <hr class="my-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-dark btn-lg text-light" name="submit"
                                            type="submit">Login</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('components.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
