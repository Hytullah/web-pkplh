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

    <!-- =======================================================
  * Template Name: Squadfree
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="#"><span>PKPLH</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            @include('components.navbar')

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>FORM PENGADUAN PUBLIK</h2>
                </div>


            </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="pengaduan" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://maps.google.com/maps?q=dinas lingkungan hidup maros&t=&z=10&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('kirim') }}" method="post" class="">
                            @csrf
                            {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> --}}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" id="nama"
                                        value="{{ old('nama') }}" placeholder="Nama" required>
                                    @error('nama')
                                        <div class="alert alert-danger">Nama tidak boleh berupa angka</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control @error('kontak') is-invalid @enderror"
                                        name="kontak" id="kontak" value="{{ old('kontak') }}"
                                        placeholder="Kontak(WA/Email)" required>
                                    @error('kontak')
                                        <div class="alert alert-danger">Contoh: +62xxxxxxxxxxx atau james@email.com</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                {{-- <label for="type">Bagian</label> --}}
                                <select class="form-select" id="bagian" name="bagian"
                                    aria-label="Floating label select example" required>
                                    <option value="">--Bagian--</option>
                                    <option value="1" {{ old('bagian') == '1' ? 'selected' : '' }}>Kepala Bidang
                                        Perumahan</option>
                                    <option value="2" {{ old('bagian') == '2' ? 'selected' : '' }}>Kepala Bidang
                                        Kawasan Pemukiman</option>
                                    <option value="3" {{ old('bagian') == '3' ? 'selected' : '' }}>Kepala Bidang
                                        Kelembagaan Lingkungan Hidup</option>
                                    <option value="4" {{ old('bagian') == '4' ? 'selected' : '' }}>Kepala Bidang
                                        Pengelolaan Lingkungan Hidup</option>
                                </select>

                                {{-- <label for="floatingSelect">Works with selects</label> --}}
                            </div>
                            {{-- <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject">
                            </div> --}}
                            <div class="form-group mt-3">
                                <textarea class="form-control" id="isi" name="isi" rows="5" placeholder="Pesan" required>{{ old('nama') }}</textarea>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div class="text-center my-3">
                                <button type="submit" class="btn btn-info text-light"
                                    style="float: right;">Kirim</button>
                            </div>
                            <button type="reset" class="btn" style="margin-right: 10px; float: right;">Batal</button>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->



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

    @include('sweetalert::alert')

</body>

</html>
{{-- 
kepala bidang perumahan,
kepala bidang kawasan pemukiman,
kepala bidang kelembagaan lingkungan hidup,
kepala bidang pengelolaan lingkungan hidup --}}
