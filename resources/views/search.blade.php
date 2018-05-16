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
            <h1>Hasil Pencarian</h1>
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
         </div>
         <!-- END -->
         <!-- MORE BTN -->
         <!-- END -->
      </div>
   </div>
</section>
<!-- FEATURED LISTINGS END -->
@endsection