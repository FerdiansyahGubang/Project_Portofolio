@php
$cover = get_cover_value();
$titlesite = $cover->title;
$fotoprofile = $cover->foto;
$content1 = $cover->content1;
$content2 = $cover->content2;

$about = get_about_value();
$shortIntroduction = $about->Pengenalan_Singkat;
$mainSkill = $about->Skill_Utama;
$skillDescription = $about->Deskripsi_Skill;
$tanggalLahir = $about->Tanggal_Lahir;
$website = $about->Website;
$nomorTelepon = $about->Nomor_Telepon;
$kota = $about->Kota;
$usia = $about->Usia;
$tingkatKemahiran = $about->Tingkat_Kemahiran;
$email = $about->Email;
$pekerjaan = $about->Pekerjaan;
$deskripsiBiodata = $about->Deskripsi_Biodata;

$hobi = get_hobi_value();
$skills = get_skill_value();
$pendidikan = get_pendidikan_value();
$pengalaman = get_kemahiran_value();
$project = get_project_value();

$riwayat = get_riwayat_value();
$RiwayatSingkat=$riwayat->Riwayat_Singkat;
$Nama=$riwayat->Nama;
$Deskripsi_Singkat=$riwayat->Deskripsi_Singkat;
$Alamat=$riwayat->Alamat;
$NoHP=$riwayat->No_HP;

$contact = get_contact_value();
$Deskripsi_Contact = $contact->Deskripsi_Contact;
$Alamat_Contact = $contact->Alamat;
$Email_Contact = $contact->Email;
$No_Telp_Contact = $contact->No_Telp;
$Link_GMAP_Contact = $contact->Link_GMAP;

$Twitter = get_sosmed_value('Twitter');
$Facebook = get_sosmed_value('Facebook');
$Instagram = get_sosmed_value('Instagram');
$Youtube = get_sosmed_value('Youtube');
$Github = get_sosmed_value('Github');

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$titlesite}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/foto.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">{{$titlesite}}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{$Twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="{{$Facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{$Instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{$Youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="{{$Github}}" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Riwayat</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Project</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$titlesite}}</h1>
      <p>{{$content1}}<span class="typed" data-typed-items="{{$content2}}"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>
            {{$shortIntroduction}}
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/foto.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$mainSkill}}</h3>
            <p class="fst-italic">
              {{$skillDescription}}
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$website}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$nomorTelepon}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$kota}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>{{$tanggalLahir}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$usia}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$tingkatKemahiran}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$pekerjaan}}</span></li>
                </ul>
              </div>
            </div>
            <p>
              {{$deskripsiBiodata}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Hobi</h2>
          <p>
            Saya gemar sekali mendengar musik dan membaca sebuah komik, saya juga gemar menonton video animasi
          </p>
        </div>

        <div class="row no-gutters">
          @foreach ($hobi as $item)
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $item->Tingkat_Kegemaran }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>{{ $item->Jenis_Hobi }}</strong></p>
              <p>{{$item->Deskripsi_Hobi}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skils</h2>
          <p>Berikut adalah skill yang saya tekuni</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-12" data-aos="fade-up">
            <div class="row skills-content">
              @foreach ($skills as $itemskill)
              <div class="col-lg-6" data-aos="fade-up">
                <div class="progress">
                  <span class="skill">{{$itemskill->Skill}}<i class="val">{{$itemskill->Nilai_Skill}}</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$itemskill->Nilai_Skill}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>{{$RiwayatSingkat}}</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Riwayat Hidup</h3>
            <div class="resume-item pb-0">
              <h4>{{$Nama}}</h4>
              <p><em>{{$Deskripsi_Singkat}}</em></p>
              <ul>
                <li>{{$Alamat}}</li>
                <li>{{$NoHP}}</li>
                <li>{{$email}}</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            @foreach ($pendidikan as $itempendididikan)
            <div class="resume-item">
              <h4>{{$itempendididikan->Nama_Sekolah}}</h4>
              <h5>{{$itempendididikan->Tahun}}</h5>
              <p><em>{{$itempendididikan->Alamat_Sekolah}}</em></p>
              <p>{{$itempendididikan->Deskripsi_Singkat}}</p>
            </div>
            @endforeach
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            @foreach ($pengalaman as $itempengalaman)
            <h3 class="resume-title">Pengalaman</h3>
            <div class="resume-item">
              <h4>{{$itempengalaman->Jenis_Kemahiran}}</h4>
              <h5>{{$itempengalaman->Tahun}}</h5>
              <p><em>{{$itempengalaman->Tempat}}</em></p>
              <ul>
                <li>{{$itempengalaman->Deskripsi_Kemahiran}}</li>
              </ul>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Project</h2>
          <p>Berikut adalah beberapa project yang pernah saya kerjakan</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          @foreach ($project as $itemproject)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ Storage::url($itemproject->Foto_Project) }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ Storage::url($itemproject->Foto_Project) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$itemproject->Judul_Project}}<p>{{$itemproject->Deskripsi_Project}}</p>"><i class="bx bx-plus"></i></a>
                <a href="{{$itemproject->Link_Project}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>{{$Deskripsi_Contact}}</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat</h4>
                <p>{{$Alamat_Contact}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>{{$Email_Contact}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No HP:</h4>
                <p>{{$No_Telp_Contact}}</p>
              </div>
              <iframe src="{{$Link_GMAP_Contact}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

        </div>
        <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$titlesite}}</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>