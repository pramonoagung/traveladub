@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
<link rel="stylesheet" href="dist/css/adminlte.css">
<section class="content-header">
    <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card card-primary card-outline">
               <div class="card-body box-profile">
                  <div class="text-center">
                     <img class="profile-user-img img-fluid img-circle"
                        src="dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center" style="color:#d63031">{{Auth::user()->name}}</h3>
               </div>
            </div>
            <div class="card card-primary">
            </div>
         </div>
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h2 style="color:#d63031">About Me</h2>
               </div>
               <div class="card-body">
                  <strong><h3 style="color:#d63031"><i class="fa fa-envelope"></i> Email</h3></strong>
                  <h5>
                     {{Auth::user()->email}}
                  </h5>
                  {{--<hr>--}}
                   {{--<strong><h3 style="color:#d63031"><i class="fa fa-calendar"></i> Tanggal Lahir</h3></strong>--}}
                  {{--<h5>--}}
                     {{--12 Februari 1997--}}
                  {{--</h5>--}}
                  <hr>
                   <strong><h3 style="color:#d63031"><i class="fa fa-file-text"></i> Jumlah Post</h3></strong>
                  <h5>
                     120
                  </h5>
                  <hr>
                   <strong><h3 style="color:#d63031"><i class="fa fa-lock"></i> Password</h3></strong>
                  <h5>
                     *********
                  </h5>
                  <hr>
                  <form>
                     <input type="button" onclick="edit()" name="editprofile" value="Edit Profile" style="width: 100%; background-color: #d63031;color: white; height: 40px;font-size: 15px">
                  </form>
                   <script type="application/javascript">
                       function edit() {
                           window.location = "/profile/{{Auth::user()->id}}/edit";
                       }
                   </script>
                  <br>
                  <form>
                     <input type="button" name="Edit Password" value="Edit Password" style="width: 100%; background-color: #d63031;color: white; height: 40px;font-size: 15px">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
@endsection