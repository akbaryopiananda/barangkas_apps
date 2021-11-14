<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href={{ asset('css/styles.css')}}>

    <title>Barangkas</title>
    <link rel="icon" href={{ asset('/image/head.png') }}>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <!--=============== HEADER ===============-->

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo"><img src={{asset('image/logo.png')}} alt="" width="75%" style="background-color: white; border-radius: 20px; "></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/" class="nav__link">Beranda</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link active-link">Kontak</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">FAQ</a>
                    </li>

                    <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

            <a href="#" class="button button__header">Login!</a>
        </nav>
    </header>
    <!-- home -->
    <section class="home section">
        <div class="home__container container grid  shape1">
            <div class="home__data">
                <h1 class="home__title ">Barangkas
                    <hr width="50% ">
                </h1>
                <p class="home__description ">#langkahkecil #dapatkanhasil</p>

                <h3 class="home__description ">"Ada yang bisa dibantu ?"</h3>
            </div>
            <img src={{asset('image/asset6.png')}} class="svg__color beranda__img head1" alt=" " style="width: 70%; ">

        </div>
    </section>
    <!-- Contact -->
    <!--=============== CONTACT US ===============-->
    <section class="contact section container" id="contact">
        <div class="contact__container grid">
            <div class="contact__content">
                <h2 class="section__title-center">Contact Us From <br> Here</h2>
                <p class="contact__description">Terima kasih telah Berkunjung di Website Barangkas! <br> Jika kamu memiliki pertanyaan seputar Barangkas, bisa menghubungi kami melalui kontak di laman ini.</p>
            </div>

            <ul class="contact__content grid">
                <li class="contact__address">Telephone: <span class="contact__information">+62 822 5138 0714</span></li>
                <li class="contact__address">Email: <span class="contact__information">barangkas.id@gmail.com</span></li>
                <li class="contact__address">Instagram: <span class="contact__information">@barangkas.id</span></li>
            </ul>

            <div class="contact__content">
                <a href="#" class="button">Contact Us</a>
            </div>
        </div>
    </section>

    <!--=============== FOOTER ===============-->
    <footer class="footer section ">
        <div class="footer__container container grid ">
            <div class="footer__content ">
                <a href="# " class="footer__logo "><img src={{ asset('image/logo.png')}} alt=" " style="background-color: white; border-radius: 20px; "></a>
                <p class="footer__description ">Barangkas merupakan solusi untuk melakukan investasi dengan memanfaatkan sampah dan barang bekas demi menunjang kebersihan bumi.</p>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">Our Services</h3>
                <ul class="footer__links ">
                    <li><a href="# " class="footer__link ">Pricing </a></li>
                    <li><a href="# " class="footer__link ">Discounts</a></li>
                    <li><a href="# " class="footer__link ">Report a bug</a></li>
                    <li><a href="# " class="footer__link ">Terms of Service</a></li>
                </ul>
            </div>

            <div class="footer__content ">
                <h3 class="footer__title ">Our Company</h3>
                <ul class="footer__links ">
                    <li><a href="# " class="footer__link ">Blog</a></li>
                    <li><a href="# " class="footer__link ">Our mision</a></li>
                    <li><a href="# " class="footer__link ">Get in touch</a></li>
                </ul>
            </div>
            <div class="footer__content ">
                <h3 class="footer__title ">We Are On</h3>
                <div class="app__buttons ">
                    <a href="# " class="button button-flex ">
                        <i class='bx bxl-apple button__icon'></i> App Store
                    </a>
                    <a href="# " class="button button-flex ">
                        <i class='bx bxl-play-store button__icon'></i> Google Play
                    </a>
                </div>
            </div>
        </div>

        <p class="footer__copy ">&#169; Barangkas. Developed with 💙 and lots of coffee by IT Barangkas</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="# " class="scrollup " id="scroll-up ">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== MAIN JS ===============-->
    <script src={{ asset('js/main.js')}}></script>

</body>

</html>