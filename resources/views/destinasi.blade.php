@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
<section class="gl-hero-img-wrapper" style="height: 30px;">
   <div class="container" >
   <div class="gl-elements-content-wrapper">
      <div class="gl-directory-searchbar gl-bz-directory-searchbar" style="margin: 0px 0px">
         <form action="#" id="gl-bz-directory-form">
            <fieldset>
               <input type="text" name="search" id="gl-search-location"
                  class="gl-directory-input" placeholder="Cari tempat wisata..." style="width: 50%">
               <div class="gl-business-category gl-category-dropdown" style="width: 50%">
                  <select id="provinsi" class="gl-category-dropdown-selection" >
                  </select>
               </div>
            </fieldset>
            <button type="submit" class="gl-icon-btn"><i class="fa fa-search"></i> Search</button>
         </form>
      </div>
   </div>
</section>
<!-- FEATURED LISTINGS -->
<section class="gl-feat-listing-section gl-section-wrapper">
   <div class="container">
      <div class="row">
         <!-- SECTION HEADINGS -->
         <div class="gl-section-headings">
            <h1>Daftar Destinasi</h1>
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
                  5.1
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Taman Kunang-Kunang</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Mawar, Jager, Surabaya</span>
                  </div>
               </div>
            </div>
            <!-- END -->
            <!-- FEATURED ITEMS -->
            <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
               data-wow-delay=".5s">
               <div class="gl-feat-items-img-wrapper">
                  <picture>
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-2.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-2.jpg>
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
                     <a href="/detail/destinasi">Kota Gangster</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Raya Batu, Batu, Malang</span>
                  </div>
               </div>
            </div>
            <!-- END -->
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
                  5.1
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Taman Kunang-Kunang</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Mawar, Jager, Surabaya</span>
                  </div>
               </div>
            </div>
            <!-- END -->
            <!-- FEATURED ITEMS -->
            <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
               data-wow-delay=".5s">
               <div class="gl-feat-items-img-wrapper">
                  <picture>
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-2.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-2.jpg>
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
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-3.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-3.jpg>
                  </picture>
               </div>
               <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.5
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Kota Gangster</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Raya Batu, Batu, Malang</span>
                  </div>
               </div>
            </div>
            <!-- END -->
         </div>
         <!-- END -->
         <!-- WRAPPER -->
         <div class="gl-featured-listing-wrapper">
            <!-- FEATURED ITEMS -->
            <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
               data-wow-delay=".3s">
               <div class="gl-feat-items-img-wrapper">
                  <picture>
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-1.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-1.jpg>
                  </picture>
               </div>
               <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  5.1
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Taman Kunang-Kunang</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Mawar, Jager, Surabaya</span>
                  </div>
               </div>
            </div>
            <!-- END -->
            <!-- FEATURED ITEMS -->
            <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
               data-wow-delay=".5s">
               <div class="gl-feat-items-img-wrapper">
                  <picture>
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-2.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-2.jpg>
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
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-3.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-3.jpg>
                  </picture>
               </div>
               <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.5
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Kota Gangster</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Raya Batu, Batu, Malang</span>
                  </div>
               </div>
            </div>
            <!-- END -->
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
                  5.1
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Taman Kunang-Kunang</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Mawar, Jager, Surabaya</span>
                  </div>
               </div>
            </div>
            <!-- END -->
            <!-- FEATURED ITEMS -->
            <div class="gl-featured-items col-md-4 col-sm-4 col-xs-12 appear fadeIn" data-wow-duration="1s"
               data-wow-delay=".5s">
               <div class="gl-feat-items-img-wrapper">
                  <picture>
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-2.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-2.jpg>
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
                     <source media="(min-width: 768px)" srcset=assets/images/featured-listing-3.jpg>
                     <img alt="Featured Listing" srcset=assets/images/featured-listing-3.jpg>
                  </picture>
               </div>
               <div class="gl-feat-item-details">
                  <span class="gl-item-rating">
                  <i class="ion-android-star-outline"></i>
                  4.5
                  </span>
                  <h3>
                     <a href="/detail/destinasi">Kota Gangster</a>
                  </h3>
                  <div class="gl-item-location">
                     <i class="ion-ios-location-outline"></i>
                     <span>Jalan Raya Batu, Batu, Malang</span>
                  </div>
               </div>
            </div>
            <!-- END -->
         </div>
         <!-- END -->
         <!-- MORE BTN -->
         <!-- END -->
      </div>
   </div>
</section>
<!-- FEATURED LISTINGS END -->
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
    let dropdown = $('#provinsi');

dropdown.empty();

const url = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi';

$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.abbreviation).text(entry.name));
  })
});
});
    
</script>