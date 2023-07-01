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
    <link href="{{ URL::to('/') }}/assets/css/lightslider.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <!-- Carousel wrapper -->
    <div
    id="carouselMultiItemExample"
    class="carousel slide carousel-dark text-center"
    data-mdb-ride="carousel"
    >
        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
            <div class="container">
                <h2>Hasil Pencarian</h2>
                <div class="row justify-content-center">
                @forelse ($results as $result)
                <div class="col-sm-3">
                    <div class="card">
                    <img
                        src="{{ $result['image'] }}"
                        class="card-img-top"
                        alt="{{ $result['name'] }}"
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ $result["name"] }}</h5>
                        <p class="card-text">
                        Tingkat Kemiripan : {{ $result["jarak"] }}%
                        </p>
                        <a href="{{ route('predict.show', $result['id']) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                    </div>
                </div>
                @empty
                    <tr>
                        <td class="text-center" colspan="5">Data tempat wisata tidak tersedia</td>
                    </tr>
                @endforelse
            </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::to('/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ URL::to('/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
</html>
