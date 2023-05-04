<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Predict Image</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="{{ URL::to('/') }}/assets/img/favicon.png" rel="icon"> -->
  <link href="{{ URL::to('/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::to('/') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.9.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ URL::to('/') }}/assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
            <form action="{{ route('predict.process') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <h2 class="animate__animated animate__fadeInDown">Temukan Tempat Wisata</h2>
                <div class="form-group mt-3 mb-3 text-center">
                    <input type="file" name="image" class="form-control">
                </div>
              <button type="submit" class="btn-get-started animate__animated animate__fadeInUp scrollto">Prediksi</button>
            </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::to('/') }}/assets/js/main.js"></script>

</body>

</html>
