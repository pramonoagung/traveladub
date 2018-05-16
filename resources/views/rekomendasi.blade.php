@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
<!-- FEATURED LISTINGS -->
<section class="gl-feat-listing-section gl-section-wrapper">
   <div class="container">
      <div class="row">
         <div class="gl-section-headings">
            <h1>Rekomendasi Tempat Wisata</h1>
            <p>Ajukan pada kami tempat wisata yang menarik menurut anda.</p>
         </div>
         <div>
            <form>
               <div class="form-group">
                  <label for="username" class="control-label" style="font-size: 20px" readonly>Pemberi Rekomendasi</label>
                  <input type="text" value="{{Auth::user()->name}} ({{Auth::user()->email}})" disabled class="form-control" id="username" name="username" style="height: 50px">
               </div>
               <div class="form-group">
                  <label for="namadestinasi" class="control-label" style="font-size: 20px">Nama Destinasi</label>
                  <input type="text" class="form-control" id="namadestinasi" name="namadestinasi" style="height: 50px">
               </div>
               <div class="form-group">
                  <label for="alamatdestinasi" class="control-label" style="font-size: 20px" >Alamat Destinasi</label>
                  <input type="text" class="form-control" id="alamatdestinasi" name="alamatdestinasi" style="height: 50px">
               </div>
                <div class="form-group">
                  <label for="provinsi" class="control-label" style="font-size: 20px">Provinsi</label>
                  <select class="form-control" id="provinsi" style="height: 50px">
                  </select>                   
               </div>
               <div class="form-group">
                 <label for="alasan" class="control-label" style="font-size: 20px"  >Alasan Rekomendasi</label>
                 <textarea class="form-control" id="alasan" name="alasan" style="height: 100px"></textarea>
               </div>
               <div class="form-group">
                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary" style="font-size:20px;height: 50px;width: 100%;background-color: #d63031">Rekomendasikan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection