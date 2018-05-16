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

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

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
        @if ($message = Session::get('status'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 2% 0%">
                    <table style="width: 90%;text-align: center;margin:10px auto;" align="center" id="customers">
                        <tr>
                            <th style="width: 10%">Nama Destinasi</th>
                            <th style="width: 25%">Deskripsi</th>
                            <th style="width: 5%">Harga Tiket</th>
                            <th style="width: 5%">Provinsi</th>
                            <th style="width: 10%">Alamat</th>
                            <th style="width: 10%">Fasilitas</th>
                            <th style="width: 5%">Nomor Telepon</th>
                            <th style="width: 15%">Transportasi</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        @foreach($destinasis as $destinasi)
                            <tr>
                                <td>{{$destinasi->judul}}</td>
                                <td>
                                    <div style="height: 20px; overflow: hidden;">{{$destinasi->deskripsi}}</div>
                                </td>
                                <td>{{$destinasi->harga}}</td>
                                <td>{{$destinasi->provinsi}}</td>
                                <td>
                                    <div style="height: 20px;overflow: hidden;">{{$destinasi->alamat}}</div>
                                </td>
                                <td>
                                    <div style="height: 20px;overflow: hidden;">{{$destinasi->fasilitas}}</div>
                                </td>
                                <td>
                                    <div style="height: 20px;overflow: hidden;">{{$destinasi->telp}}</div>
                                </td>
                                <td>
                                    <div style="height: 20px;overflow: hidden;">{{$destinasi->transportasi}}</div>
                                </td>
                                <td>
                                    <a href="/destinasi/{{$destinasi->id}}/delete"
                                       style="background-color: red; border: none; color: white;   padding: 15px 32px; text-align: center;text-decoration: none; display: inline-block;font-size: 16px;">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.layouts.footer')