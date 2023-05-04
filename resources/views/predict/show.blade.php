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
    <link href="{{ URL::to('/') }}/assets/css/detail.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/assets/css/lightslider.css" rel="stylesheet">
</head>

<body>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">{{$result->name ?? 'Nama Tempat Wisata'}}</h3>
                        <h6 class="theme-color lead">Magelang, Jawa Tengah</h6>
                        <p>{{$result->description ?? 'Deskripsi'}}</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Jam Operasional</label>
                                    <p>07:00 sampai 17:00</p>
                                </div>
                                <div class="media">
                                    <label>Alamat</label>
                                    <p>Jl. Badrawati, Borobudur, Magelang, Jawa Tengah</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Harga Tiket</label>
                                    <p>Rp. 10.000-,</p>
                                </div>
                                <div class="media">
                                    <label>Kontak</label>
                                    <p>820-885-3321</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="demo">
                    <ul id="lightSlider">
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-1.jpg">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Borobudur_Temple.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-2.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-3.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-3.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-4.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-5.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-5.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-6.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-6.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-7.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-7.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-8.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-8.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-9.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-9.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-10.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-10.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-11.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-12.jpg" />
                        </li>
                        <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-13.jpg">
                            <img src="http://sachinchoolur.github.io/lightslider/img/cS-13.jpg" />
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="{{ URL::to('/') }}/assets/js/lightslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop:true,
                slideMargin: 0,
                thumbItem: 9
            });
        });
    </script>
</body>
</html>
