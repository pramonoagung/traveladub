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
                  List User
               </li>
            </ol>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">List User</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default" style="padding: 2% 0%">
                  <table style="width: 90%;text-align: center;margin:10px auto;" align="center" id="customers">
                        <tr>
                           <th>ID User</th>
                           <th>Nama Lengkap</th>
                           <th>Email</th>
                           <th>Tanggal Lahir</th>
                           <th>Total Post</th>
                        </tr>
                        <tr>
                           <td>U1</td>
                           <td>Ari Setiawan</td>
                           <td>arisetiawanproject@gmail.com</td>
                           <td>12 Januari 1997</td>
                           <td>198</td>
                        </tr>
                        <tr>
                           <td>U2</td>
                           <td>Agung Pramono</td>
                           <td>agungprasatu@gmail.com</td>
                           <td>17 Februari 1997</td>
                           <td>197</td>
                        </tr>
                        <tr>
                           <td>U3</td>
                           <td>I Gede Satya Krisna P</td>
                           <td>satyaa@gmail.com</td>
                           <td>5 Januari 1997</td>
                           <td>12</td>
                        </tr>
                        <tr>
                           <td>U4</td>
                           <td>Martantio Wicaksono</td>
                           <td>tio@gmail.com</td>
                           <td>12 Maret 1997</td>
                           <td>76</td>
                        </tr>
                        <tr>
                           <td>U5</td>
                           <td>Ainul Furkan</td>
                           <td>ainulfurkan@gmail.com</td>
                           <td>12 Desember 1997</td>
                           <td>75</td>
                        </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
@extends('admin.layouts.footer')