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
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">

            <div class="logo">
                <h1 class="text-light"><a href="{{ route('index') }}"><span>PKPLH</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            @include('components.navbar')

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Selamat Datang<h1>
                    <h2>Dinas Perumahan Kawasan Permukiman dan Lingkungan Hidup</h2>
                    {{-- <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a> --}}
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Sambutan</h2>
                    <p>Bismillaahirrohmaanirrohiim Assalamualaikum Wr. Wb. Puji syukur kami panjatkan kehadirat Allah
                        SWT atas diluncurkannya situs resmi website Dinas Perumahan Kawasan Pemukiman dan Lingkungan
                        Hidup Kabupaten Maros. Kami harap website ini dapat bermanfaat dalam memberikan data dan
                        informasi terkait dengan Pembangunan Perumahan, Kawasan Permukiman dan Lingkungan Hidup yang
                        dapat digunakan tidak hanya oleh tenaga, namun juga dapat dimanfaatkan oleh masyarakat luas.
                        Pengguna website dapat mengakses dan mengunduh langsung publikasi data dan informasi, yang dapat
                        digunakan sesuai dengan kebutuhan. Data dan informasi yang disajikan masih dalam bentuk produk
                        publikasi dan kedepannyaa akan juga menampilkan produk-produk informasi berupa grafik yang
                        interaktif. Kami berusaha untuk menyajikan informasi yang terkini sehingga dapat memenuhi
                        keinginan dan kebutuhan para stakeholder pada khususnya dan masyarakat Indonesia pada umumnya,
                        dan khususnya masyarakat Kabupaten Maros untuk memberikan informasi. Website ini diharapkan
                        tidak hanya sebagai media publikasi, namun juga dapat diakses sebagai sarana komunikasi
                        interaktif, sehingga dapat memberikan manfaat bagi banyak pihak. Kedepannya, website ini akan
                        terus mendapatkan perbaikan dan peningkatan sehingga dapat memenuhi kebutuhan semua pengguna
                        informasi. Akhir kata, kepada semua pihak yang telah bekerjasama memberikan kontribusi sehingga
                        website ini dapat diluncurkan dan memberikan khasanah lain dalam media diseminasi informasi di
                        lingkungan Dinas Perumahan, Kawasan Pemukiman dan Lingkungan Hidup Kabupaten Maros, kami
                        mengucapkan terimakasih.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="150">
                            <div class="pic"><img src="assets/img/team/kadinas.jpeg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Ir. H.ABDUL SALAM, MM</h4>
                                <span>Kepala Dinas</span>
                                <div class="social">
                                    <p>196402081992031012</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">

                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Visi Misi</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Maros Sejahtera, Religius Dan Berdaya Saing
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Visi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="col text-center">
                            <h3>Visi</h3>
                        </div>
                    </div>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Meningkatkan Kualitas Penyelenggaraan Birokrasi Dan Pelayanan Publik
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Meningkatkan Pembangunan Sumber Daya Manusia.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Meningkatkan Keterjangkauan Kebutuhan Dasar Dan Pelayanan Dasar Secara Inklusif
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Meningkatkan Ketahanan Ekonomi Daerah Berbasis Potensi Lokal
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Memantapkan Pembangunan Infrastruktur Ekonomi Dan Pemerataan Wilayah
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Meningkatkan Kualitas Lingkungan Hidup Dan Ketahanan Bencana
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                {{-- <h3>Misi</h3> --}}
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="col text-center">
                        <h3>Misi</h3>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>INFORMASI PUBLIK</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        {{-- <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div> --}}
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="{{ route('landing.kegiatan') }}">Data Kegiatan</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="{{ route('landing.rencana') }}">Data Kegiatan yang direncanakan</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div> --}}
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Kontak</h2>
              </div>
      
              <div class="row">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Asoka No.1, Pettuadae, Kec. Turikale, Kabupaten Maros, Sulawesi Selatan 90511</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>dinaspkplh@gmail.com</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Customer Service</h3>
                    <p>+6253 5589 5548 855</p>
                  </div>
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

</body>

</html>
