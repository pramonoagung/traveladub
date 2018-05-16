@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
    <!-- HERO IMAGE -->
    <section class="gl-hero-img-wrapper">
        <div class="container">
            <div class="row">
                <div class="gl-elements-content-wrapper">
                    <div id="typed-strings">
                        <p>Let’s <span class="gl-color-text">go</span> anywhere</p>
                        <p>Temukan Tempat <span class="gl-color-text">Wisata Terbaik</span> di Indonesia</p>
                    </div>
                    <h2 id="gl-slogan" class="gl-hero-text-heading"></h2>
                    <p class="gl-hero-text-paragraph">Temukan tempat wisata tujuan anda hanya di TraveLadub</p>
                    <!-- DIRECTORY FORM -->
                    <div class="gl-directory-searchbar gl-bz-directory-searchbar">
                        <form action="/cari" method="get" id="gl-bz-directory-form">
                            <fieldset>
                                <input type="text" style="width: 100%" name="nama" id="gl-search-location"
                                       class="gl-directory-input" placeholder="Cari tempat wisata...">
                            </fieldset>
                            <button type="submit" class="gl-icon-btn"><i class="fa fa-search"></i> Search</button>
                        </form>
                    </div>
                    <!-- END -->
                    <div class="gl-scroll-down-wrapper">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO IMAGE END -->
    <!-- FEATURED LISTINGS -->
    <section class="gl-feat-listing-section gl-section-wrapper">
        <div class="container">
            <div class="row">
                <!-- SECTION HEADINGS -->
                <div class="gl-section-headings">
                    <h1>Tempat Wisata Populer</h1>
                </div>
                <!-- END -->
                <!-- WRAPPER -->
                <div class="gl-featured-listing-wrapper">
                    <!-- FEATURED ITEMS -->
                    <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <div class="gl-feat-items-img-wrapper">
                            <picture>
                                <source media="(min-width: 768px)" srcset=assets/images/featured-listing-2.jpg>
                                <img alt="Featured Listing" srcset=assets/images/featured-listing-2.jpg>
                            </picture>
                        </div>
                        <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.5
                  </span>
                            <h3>
                                <a href="/detail/destinasi">Gunung Bromo</a>
                            </h3>
                            <div class="gl-item-location">
                                <i class="ion-ios-location-outline"></i>
                                <span>Asrikaton - Pakis, Malang, Jawa Timur</span>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                    <!-- FEATURED ITEMS -->
                    <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
                         data-wow-delay=".5s">
                        <div class="gl-feat-items-img-wrapper">
                            <picture>
                                <source media="(min-width: 768px)" srcset=assets/images/Kuta-Beach-Tourism-Bali.jpg>
                                <img alt="Featured Listing" srcset=assets/images/Kuta-Beach-Tourism-Bali.jpg>
                            </picture>
                        </div>
                        <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.6
                  </span>
                            <h3>
                                <a href="/detail/destinasi">Pantai Kuta</a>
                            </h3>
                            <div class="gl-item-location">
                                <i class="ion-ios-location-outline"></i>
                                <span>Jalan Hassanudin 3, Buleleng, Bali</span>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                    <!-- FEATURED ITEMS -->
                    <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
                         data-wow-delay=".7s">
                        <div class="gl-feat-items-img-wrapper">
                            <picture>
                                <source media="(min-width: 768px)" srcset=assets/images/kotatua.jpg>
                                <img alt="Featured Listing" srcset=assets/images/kotatua.jpg>
                            </picture>
                        </div>
                        <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.5
                  </span>
                            <h3>
                                <a href="/detail/destinasi">Kota Tua</a>
                            </h3>
                            <div class="gl-item-location">
                                <i class="ion-ios-location-outline"></i>
                                <span>Jalan Kali Besar Timur, Jakarta </span>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                </div>
                <!-- END -->
                <!-- WRAPPER -->
            </div>
        </div>
    </section>
    <!-- FEATURED LISTINGS END -->
    <!-- HOW IT WORKS -->
    <section class="gl-how-it-works-section gl-custom-section gl-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="gl-custom-sec-content">
                    <h1>Apa itu TraveLadub? Bagaimana Cara Kerjanya?</h1>
                    <p>Untuk mengetahui apa itu TraveLadub dan bagaimana cara kerjanya pengunjung bisa membuka halaman
                        Frequently Asked Question (FAQ) dengan menekan tombol dibawah ini.
                    </p>
                    <a href="#" class="gl-btn gl-more-btn">FAQ</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="gl-custom-image-wrapper">
                    <img src="assets/images/xcustom-img-1.jpg.pagespeed.ic.9QLOsACqJY.jpg" alt="Custom Image"
                         class="gl-lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- HOW IT WORKS END -->
    <!-- CTA -->
    <section class="gl-cta-section">
        <div class="container">
            <div class="row">
                <div class="gl-cta-content-wrapper">
                    <p> Get TraveLadub app for <span class="gl-bold-font">devices</span> from
                        playstore and appstore
                    </p>
                    <ul>
                        <li>
                            <a href="#" class="gl-google-play-btn"></a>
                        </li>
                        <li>
                            <a href="#" class="gl-app-store-btn"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA END -->
@endsection