@extends('admin.layouts.core')
@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')
@section('content')
<style>
      #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
      <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
         <div class="row">
            <ol class="breadcrumb">
               <li>
                  <a href="home.html"><em class="fa fa-home"></em></a>
               </li>
               <li class="active">
                  List Rekomendasi
               </li>
            </ol>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">List Rekomendasi</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default" style="padding: 2% 0%">
                  <table style="width: 90%;text-align: center;margin:10px auto;" align="center" id="customers">
                        <tr>
                           <th style="width: 15%">ID Rekomendasi</th>
                           <th  style="width: 10%">ID User</th>
                           <th  style="width: 15%">Nama Tempat</th>
                           <th  style="width: 25%">Alamat</th>
                           <th  style="width: 20%">Alasan</th>
                           <th  style="width: 20%">Action</th>
                        </tr>
                        <tr>
                           <td>R1</td>
                           <td>U1</td>
                           <td>Pantai 3 Warna</td>
                           <td><div style="height: 20px;overflow: hidden;">Jl. Sendang Biru, Tambakrejo, Sumbermanjing, Malang, Jawa Timur</div></td>
                           <td><div style="height: 20px;overflow: hidden;">Tempatnya bagus dan murah</div></td>
                           <td><button style="background-color: green; border: none; color: white;   padding: 15px 32px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;width: 100%">Tambahkan</button>
                           <button style="background-color: red; border: none; color: white;   padding: 15px 32px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;width: 100%">Hapus</button></td>
                        </tr>
                       
                  </table>
               </div>
            </div>
         </div>
      </div>

@endsection
@extends('admin.layouts.footer')