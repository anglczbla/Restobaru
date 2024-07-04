<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cafe Dreamy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS ================================================ -->
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Font-awesome.min css -->
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <!-- Js -->
    <script src="{{ url('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="{{ url('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')
    </script>
    <script src="{{ url('js/jquery.nav.js') }}"></script>
    <script src="{{ url('js/jquery.sticky.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/plugins.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
</head>
<body>
    <!-- Header start -->
    <nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">
                                        <img src="{{ url('images/logo.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="nav-link" href="{{ url('dashboard') }}">Home</a></li>
                                        <li><a class="nav-link" href="{{ url('menu') }}">Menu</a></li>
                                        <li><a class="nav-link" href="{{ url('order') }}">Order</a></li>
                                        <li><a class="nav-link" href="{{ url('reservasi') }}">Reservation</a></li>
                                        <li><a class="nav-link" href="{{ url('delivery') }}">Delivery</a></li>
                                        <li><a class="nav-link" href="{{ url('event') }}">Event</a></li>
                                        <li><a class="nav-link" href="{{ url('contact') }}">Contact Us</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-responsive-nav-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </nav><!-- header close -->

    <!-- Slider Section -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Today <span>Menu</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="{{ url('images/slider/slider-img-1.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ url('images/slider/slider-img-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ url('images/slider/slider-img-3.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ url('images/slider/slider-img-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->

    <!-- Content Section -->
    <div class="container">
        <!-- Order Create Form -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <h4 class="section-booking-title pe-3">Tambah Order Baru</h4>
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                        @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="menu_id" class="form-label">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control @error('menu_id') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Menu</option>
                            @foreach ($menus as $menu)
                            <option value="{{ $menu->id }}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                                {{ $menu->kode }} - {{ $menu->nama }} - {{ $menu->harga }}
                            </option>
                            @endforeach
                        </select>
                        @error('menu_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required>
                        @error('jumlah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                        @error('waktu')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                        @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
        <!-- End of Order Create Form -->
    </div>
</body>
</html>
