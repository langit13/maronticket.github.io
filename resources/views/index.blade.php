<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Maron Website</title>

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- Animate on scroll CDN -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Local CSS File(s) -->

    <link rel="stylesheet" href="css/style.css">

    <style>
        .services-card:nth-child(1) .circle {
            background: url('{{ asset('img/catalog4.jpg') }}');
            background-size: cover;
            filter: blur(3px) brightness(60%) contrast(120%);

        }

        .services-card:nth-child(2) .circle {
            background: url('{{ asset('img/catalog2.jpg') }}');
            background-size: cover;
            filter: blur(3px) brightness(60%) contrast(120%);

        }

        .services-card:nth-child(3) .circle {
            background: url('{{ asset('img/catalog4.jpg') }}');
            background-size: cover;
            filter: blur(3px) brightness(60%) contrast(120%);

        }

        .services-card:nth-child(4) .circle {
            background: url('{{ asset('img/catalog2.jpg') }}');
            background-size: cover;
            filter: blur(3px) brightness(60%) contrast(120%);

        }
    </style>

</head>

<body>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar">
            <ul class="links-container">
                <li class="link-item"><a href="#hero-section">Beranda</a></li>
                <li class="link-item"><a href="#explore-section">Katalog</a></li>
                <li class="link-item"><a href="#location-section"><img src="img/logo.png" alt="logo" class="logo"></a></li>
                <li class="link-item"><a href="#services-section">Tutorial</a></li>
                <li class="link-item"><a href="#book-section">Pesan</a></li>
            </ul>
        </nav>

        <!-- Hero Section -->
        <main id="hero-section" class="hero-section" data-aos="fade-up">
            <!-- Background -->
            <div class="background">
                <img src="img/home.png" alt="hero-section-image" class="background-image" style="filter: brightness(60%) contrast(120%);height: 95%;">

                <!-- Grid -->
                <div class="slider-grid">
                    <div class="grid-item hide"></div>
                    <div class="grid-item hide"></div>
                    <div class="grid-item hide"></div>
                    <div class="grid-item hide"></div>
                    <div class="grid-item hide"></div>
                    <div class="grid-item hide"></div>
                </div>
            </div>

            <div class="hero-section-content">
                <h1 class="hero-section-title">Sumber Maron</h1>
                <p class="hero-section-sub-heading">Sumber Maron merupakan tempat wisata alam sumber mata air jernih.</p>
            </div>

            <!-- Scroll Down Image -->
            <img src="img/down arrow.png" alt="scroll down" class="scroll-down-icon" id="scrollDownIcon">
        </main>
    </header>

    <!-- Explore Section -->
    <section class="explore-section" id="explore-section">
        <h1 class="section-title" data-aos="fade-up">Katalog</h1>
        <p class="section-para">
            Sumber Maron adalah destinasi wisata alam yang memukau, terletak dipedalaman yang sejuk dan asri. Dikelilingi oleh hutan hijau dan sungai yang jernih, tempat ini menawarkan pengalaman alam yang unik
        </p>

        <!-- grid -->
        <div class="tours-container">
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog1.jpg" alt="" class="tour-img">
            </div>
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog2.jpg" alt="" class="tour-img">
            </div>
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog3.jpg" alt="" class="tour-img">
            </div>
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog4.jpg" alt="" class="tour-img">
            </div>
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog5.jpg" alt="" class="tour-img">
            </div>
            <div class="tour-card" data-aos="fade-up">
                <img src="img/catalog6.jpg" alt="" class="tour-img">
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location-section" class="location-section">
        <h1 class="location-title" data-aos="fade-up">Lokasi</h1>
        <p class="section-para">
            Sumber Maron terletak di Desa Wisata Maron, Kabupaten Malang, UNtuk mencapai lokasi ini, Anda dapat mengikuti petunjuk pada maps dibawah ini:
        </p>

        <iframe data-aos="fade-up" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1964.462731654759!2d112.59136940999844!3d-8.16581244720168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a01d0eed37eb%3A0x2c24e254ff1390d8!2sSumber%20Maron!5e0!3m2!1sid!2sid!4v1701333772069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Tutorial Section -->
    <section id="services-section" class="services-section">
        <h1 class="section-title" data-aos="fade-up">Tutorial</h1>
        <p class="section-para">
            Selamat datang di tutorial pemesan tiket Sumber Maron! Ikuti langkah-langkah dibawah ini untuk memastikan anda dapat merencanakan perjalanan anda dengan lancar.
        </p>

        <div class="services-grid">
            <div class="services-card" data-aos="fade-up">
                <div class="circle"></div>
                <h2>1</h2>
                <p class="services-text">Klik menu "Pesan" pada navbar</p>
            </div>

            <div class="services-card" data-aos="fade-up">
                <div class="circle"></div>
                <h2>2</h2>
                <p class="services-text">Klik "Pesan Sekarang" untuk melanjutkan proses reservasi</p>
            </div>

            <div class="services-card" data-aos="fade-up">
                <div class="circle"></div>
                <h2>3</h2>
                <p class="services-text">Isi data diri yang dibutuhkan pada form yang telah disediakan</p>
            </div>

            <div class="services-card" data-aos="fade-up">
                <div class="circle"></div>
                <h2>4</h2>
                <p class="services-text">Klik tombol kirim untuk mengirimkan data diri anda ke pihak pengelola sumber maron</p>
            </div>
        </div>
    </section>

    <!-- book section -->
    <section class="book-section" id="book-section">
        <div class="book-content" data-aos="fade-up">
            <h1 class="book-now-title">Pesan Tiket Masuk</h1>
            <p class="book-now-text">
                Temukan keindaha alam Sumber Maron dengan memesan tiket perjalanan kami. Nikmati petualangan yang penuh ketenangan dan keasrian alam
            </p>

            <button class="book-now"><a href="{{ route('form') }}" style="text-decoration: none; color: #fff;">Pesan Sekarang</a></button>
        </div>
        <div class="bg-circle-2"></div>
        <img src="img/book.png" class="book-now-img" data-aos="fade-up" alt="">
    </section>

    <!-- footer -->
    <footer>
        <img src="img/pin.png" class="footer-logo" alt="">
        <div class="footer-text">
            <p>Lokasi - Dusun Adi Luwih, Kabupaten Malang</p>
            <p>Email - support@sumbermaron.com</p>
            <p>Phone - 99 88 7766655, 99 88 776644</p>
        </div>
        <p class="copyright-line">© Sumber Maron</p>
    </footer>

    <!-- animate on scoll JS CDN -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Local JS File(s) -->

    <script src="js/app.js"></script>

</body>

</html>
