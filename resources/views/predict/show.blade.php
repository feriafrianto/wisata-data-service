<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Predict Image</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">{{$touristAttraction->name ?? 'Nama Tempat Wisata'}}</h3>
                        <h6 class="theme-color lead">{{$touristAttraction->short_address ?? 'Lokasi'}}</h6>
                        <p>{{$touristAttraction->description ?? 'Deskripsi'}}</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Jam Operasional</label>
                                    <p><p>{{$touristAttraction->operational_hour ?? 'Jam Operasional'}}</p></p>
                                </div>
                                <div class="media">
                                    <label>Alamat</label>
                                    <p><p>{{$touristAttraction->address ?? 'Alamat'}}</p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Harga Tiket</label>
                                    <p>Rp. {{$touristAttraction->ticket_price ?? 'Harga Tiket'}}-,</p>
                                </div>
                                <div class="media">
                                    <label>Kontak</label>
                                    <p>{{$touristAttraction->contact ?? 'Kontact'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-3">
                        <div class="col-12">
                            <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q={{ $touristAttraction->latitude }},{{ $touristAttraction->longtitude }}&hl=es;z=14&amp;output=embed" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="row photos">
                        @foreach($touristAttraction->tourismimages as $image)
                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                <a href="{{ $image->image_link }}" data-lightbox="photos"><img class="img-fluid" src="{{ $image->image_link }}"></a>
                            </div>
                        @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

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
