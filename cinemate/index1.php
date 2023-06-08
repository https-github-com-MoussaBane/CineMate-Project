<?php
//oturumu başlat 
   
session_start(); 
error_reporting(0);

//eğer username adlı oturum değişkeni yok ise  

//login sayfasına yönlendir 

if ( !isset($_SESSION['username']) ) { 

  header("Location: index.php"); 

  exit(); 

 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CinaMate</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">CineMate</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#about">Kampanyalarımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Kısaca CineMate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Vizyondaki Filmler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Bize Ulaş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_page.php">Profil</a>
            </li>
            <li>
              <form action="/search" method="get">
                <input type="text" name="search" placeholder="Film Ara..." />
                <button type="submit">Film Ara</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container px-4 px-lg-5 h-100">
        <div
          class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center"
        >
          <div class="col-lg-8 align-self-end">
            <h1 class="text-white font-weight-bold">
              CineMate ile sinemada yeni soluk.
            </h1>
            <hr class="divider" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 mb-5">
              Sevdikleriniz ile hayattan keyif almanız için biz varız !
            </p>
            <a class="btn btn-primary btn-xl" href="girisyap.php">Giriş Yap</a>
          </div>
        </div>
      </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="text-white mt-0">Kampanyalarımız</h2>
            <hr class="divider divider-light" />
            <p class="text-white-75 mb-4">
              Haftasonu daha indirimli sinema keyfinize devam edin!  </br>
              Arkadaşlarınızla, ailenizle gelin, ekstra indirimlerden faydalanın! </br>
              Rezervasyon imkanı </br>
              Bilet iptalinde son 1 saate kadar komisyonsuz geri ödeme </br>
              Özel etkinlikler için salon rezarvasyonu </br>
              Her online satım alımınızda %9 hesabınıza para iadesi. 


            </p>
            <a class="btn btn-light btn-xl" href="register.php">Kayıt Ol</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
      <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Kısaca CineMate</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
              <h3 class="h4 mb-2">Eşsiz Konfora Hazır Olun.</h3>
              <p class="text-muted mb-0">
                Birinci sınıf koltuklarımız ve ses sistemlerimiz ile
                hizmetinizdeyiz.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2">
                <i class="bi-laptop fs-1 text-primary"></i>
              </div>
              <h3 class="h4 mb-2">Güncel Filmler</h3>
              <p class="text-muted mb-0">
                Siz değerli üyelerimizin film keyifi için, güncel filmler, yoğun
                talepler doğrultusunda istenilen filmi yayınlıyoruz.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
              <h3 class="h4 mb-2">Dublaj/Altyazı</h3>
              <p class="text-muted mb-0">
                36 Dil Desteği ile Dilediğiniz Dünya Dilinde Film İzleyin.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
              <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
              <h3 class="h4 mb-2">Sevgi ile İzleyin</h3>
              <p class="text-muted mb-0">
                Sevdiklerinizle, keyifli kaliteli vakit geçirin !
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <h1 class="text-center">Vizyondaki Filmler</h1>
          <div class="col-lg-4 col-sm-6">
            <a
              align="center"
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/jw4.jpg"
              title="Project Name"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/jw4.jpg"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">Aksiyon</div>
                <div class="project-name">John Wick 4</div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6" >
            <a
              align="center"
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/ciglik2.jpg"
              title="Project Name"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/ciglik2.jpg"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">Korku</div>
                <div class="project-name">Çığlık 6</div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a
              align="center"
              class="portfolio-box"
              href="assets/img/portfolio/fullsize/oldurenoyun2.jpg"
              title="Project Name"
            >
              <img
                class="img-fluid"
                src="assets/img/portfolio/thumbnails/oldurenoyun2.jpg"
                alt="..."
              />
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">Gerilim</div>
                <div class="project-name">Öldüren Oyun</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
      <div class="container px-4 px-lg-5 text-center">
        <!-- <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a
          class="btn btn-light btn-xl"
          href="https://startbootstrap.com/theme/creative/"
          >Download Now!</a
        > -->
      </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
      
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 col-xl-6 text-center">
            <h2 class="mt-0">Bize Ulaş</h2>
            <hr class="divider" />
            <p class="text-muted mb-5">
              Bilgileri girerek bize ulaşın
            </p>
          </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
          <div class="col-lg-6">
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              <!-- Name input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="name"
                  type="text"
                  placeholder="Enter your name..."
                  data-sb-validations="required"
                />
                <label for="name">İsim Soyisim</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">
                  A name is required.
                </div>
              </div>
              <!-- Email address input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="email"
                  type="email"
                  placeholder="name@example.com"
                  data-sb-validations="required,email"
                />
                <label for="email">Email </label>
                <div class="invalid-feedback" data-sb-feedback="email:required">
                  An email is required.
                </div>
                <div class="invalid-feedback" data-sb-feedback="email:email">
                  Email is not valid.
                </div>
              </div>
              <!-- Phone number input-->
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="phone"
                  type="tel"
                  placeholder="(123) 456-7890"
                  data-sb-validations="required"
                />
                <label for="phone">Telefon Numarası</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">
                  A phone number is required.
                </div>
              </div>
              <div class="form-floating mb-3">
                <input
                  class="form-control"
                  id="password"
                  type="password"
                  placeholder="********"
                  data-sb-validations="required,password"
                />
                <label for="text">Mesaj </label>
              </div>

              <!-- Submit success message-->
              <!---->
              <!-- This is what your users will see when the form-->
              <!-- has successfully submitted-->
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  To activate this form, sign up at
                  <br />
                  <a href="https://startbootstrap.com/solution/contact-forms"
                    >https://startbootstrap.com/solution/contact-forms</a
                  >
                </div>
              </div>
              <!-- Submit error message-->
              <!---->
              <!-- This is what your users will see when there is-->
              <!-- an error submitting the form-->
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">
                  Error sending message!
                </div>
              </div>
              <!-- Submit Button-->
              <div class="d-grid">
                <button
                  class="btn btn-primary btn-xl disabled"
                  id="submitButton"
                  type="submit"
                >
                  Gönder
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-4 text-center mb-5 mb-lg-0">
            <i class="bi-phone fs-2 mb-3 text-muted"></i>
            <div>+90 (312) 312-3123</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
      <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">
          Copyright &copy; 2023 - CineMate
          <a href="lokasyon.php">Lokasyon ve İletişim Bilgilerimiz için Tıklayın</a>

        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
