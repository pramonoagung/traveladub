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
                  List Destinasi
               </li>
            </ol>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">List Destinasi</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default" style="padding: 2% 0%">
                  <table style="width: 90%;text-align: center;margin:10px auto;" align="center" id="customers">
                        <tr>
                           <th style="width: 5%">ID Destinasi</th>
                           <th style="width: 10%">Nama Destinasi</th>
                           <th style="width: 25%">Deskripsi</th>
                           <th style="width: 5%">Harga Tiket</th>
                           <th style="width: 10%">Alamat</th>
                           <th style="width: 10%">Fasilitas</th>
                           <th style="width: 5%">Nomor Telepon</th>
                           <th style="width: 15%">Transportasi</th>
                           <th style="width: 10%">Action</th>
                        </tr>
                        <tr>
                           <td>D1</td>
                           <td>Pantai 3 Warna</td>
                           <td><div style="height: 20px; overflow: hidden;">Pantai 3 warna malang ini memiliki panorama yang sangat indah. Selain karena bersebelahan dengan pantai sendang biru, pantai ini berada dibawah pengelolaan Bhakti Alam yang para anggotanya merupakan masyarakat sekitar. Sehingga pantai tiga warna ini termasuk di wilayah konservasi dan dijadikan tempat rekreasi dan wisata. Bukan untuk mencari keuntungan semata, tetapi dimanfaatkan untuk mengedukasi para wisatawan.
                              Dengan memperkenalkan keindahaan alam Indonesia ke mancanegara, maka bisa membangkitkan semangat para wisatawan lokal untuk selalu menjaga kelestarian alam yang hukumnya sudah wajib.

                              Hal ini telah terbukti dengan adanya peraturan ketat yang ada di pantai ini, karena pantai ini masuk di area Rehabilitasi dan Konservasi Mangrove, Terumbu Karang serta Hutan Lindung Desa Sitiarjo, Kecamatan Sumber Manjing Wetan, Kabupaten Malang.

                              Uniknya lagi, pantai satu ini memiliki 3 warna laut berbeda-beda, dikarenakan hal ini terjadi karena perbedaan kedalaman air laut. Pantai bebas sampah ini memiliki panorama bawah laut berupa terumbu karang yang masih alami.</div></td>
                           <td>100000</td>
                           <td><div style="height: 20px;overflow: hidden;">Jl. Sendang Biru, Tambakrejo, Sumbermanjing, Malang, Jawa Timur</div></td>
                           <td><div style="height: 20px;overflow: hidden;">Pantai, toilet, spot foto</div></td>
                           <td><div style="height: 20px;overflow: hidden;">08967121231</div></td>
                           <td><div style="height: 20px;overflow: hidden;">Mobil lewat jalur arteri</div></td>
                           <td><button style="background-color: red; border: none; color: white;   padding: 15px 32px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;">Delete</button></td>
                        </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
@extends('admin.layouts.footer')