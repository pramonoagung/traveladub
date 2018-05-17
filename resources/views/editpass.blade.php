@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
<!-- FEATURED LISTINGS -->
<section class="gl-feat-listing-section gl-section-wrapper">
   <div class="container">
      <div class="row">
         <div class="gl-section-headings">
            <h1 style="color:#d63031">Edit Password</h1>
         </div>
         <div>
            <form>
               <div class="form-group">
                  <label style="color:#d63031" for="oldpassword" class="control-label" style="font-size: 20px" readonly>Password Lama</label>
                  <input type="text" class="form-control" id="oldpassword" name="oldpassword" style="height: 50px">
               </div>
               <div class="form-group">
                  <label style="color:#d63031" for="newpassword" class="control-label" style="font-size: 20px" readonly>Password Baru</label>
                  <input type="text" class="form-control" id="newpassword" name="newpassword" style="height: 50px">
               </div>
               <div class="form-group">
                  <label style="color:#d63031" for="confirm" class="control-label" style="font-size: 20px" >Ulangi Password</label>
                  <input type="text" class="form-control" id="confirm" name="confirm" style="height: 50px">
               </div>
               <div class="form-group">
                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary" style="font-size:20px;height: 50px;width: 100%;background-color: #d63031">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection