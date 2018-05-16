@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
<!-- FEATURED LISTINGS -->

      <link href="web/static/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
      <!--My admin Custom CSS -->
      <link href="web/static/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
      <link href="web/static/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
      <!-- animation CSS -->
      <link href="web/static/landing/css/animate.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="web/static/landing/css/style.css" rel="stylesheet">
<section class="gl-feat-listing-section gl-section-wrapper">
   <div class="container">
      <div class="row">
         <div class="gl-section-headings">
            <h1>Frequently Asked Question</h1>
         </div>
      </div>
       <div class="row">
         <div class="col-md-12">
            <div class="panel-group" id="faqAccordion">
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Bagaimana cara mendaftar di <span style="color:#d63031">TraveLadub</span> ?</a>
                     </h4>
                  </div>
                  <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Anda dapat menggunakan link berikut ini <a href="/registrasi"><span style="color:#d63031">Daftar</span></a>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Apa saja yang ada di <span style="color:#d63031">TraveLadub</span> ?</a>
                     </h4>
                  </div>
                  <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Anda dapat mencari tempat wisata yang anda inginkan beserta informasi yang lengkap seperti penjelasan mengenai tempat wisata, tiket masuk, transportasi, alamat dan sebagainya.
                           Selain itu Anda dapat saling bertukar informasi dengan para Travelers lainnya. Menyenangkan bukan?
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Apa yang ada di fitur <span style="color:#d63031">Forum</span> ?</a>
                     </h4>
                  </div>
                  <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Pada forum Anda dapat saling bertanya jawab antar travelers, saling berbagi pengalaman agar Anda dapat menambah pengetahuan tentang tempat wisata yang akan anda tuju.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Apa yang dapat Anda lakukan di fitur <span style="color:#d63031">Destinasi</span> ?</a>
                     </h4>
                  </div>
                  <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Pada fitur Destinasi Anda dapat memberitahu kepada kami selaku developer tentang tempat wisata baru yang menurut Anda wajib dikunjungi oleh para Travelers lain.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Dapatkah kita melakukan pencarian tempat wisata di <span style="color:#d63031">TraveLadub</span> ?</a>
                     </h4>
                  </div>
                  <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Tentu saja bisa! Anda dapat melakukan search berdasarkan nama tempat wisata dan atau provinsi tempat wisata itu berada.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Apa syarat untuk Anda menggunakan fitur Rekomendasi?</a>
                     </h4>
                  </div>
                  <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Anda hanya cukup mendaftar dan masuk dengan menggunakan akun yang telah anda daftarkan.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                     <h4 class="panel-title">
                        <a href="#" class="ing font-bold">Bagaimana cara Anda mengetahui destinasi wisata yang sedang 'hits' saat ini?</a>
                     </h4>
                  </div>
                  <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <p>
                           Anda hanya cukup menuju halaman utama website <span style="color:#d63031">TraveLadub</span> dan Anda akan menemukan tempat wisata yang sekarang sedang populer.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<!-- FEATURED LISTINGS END -->
@endsection