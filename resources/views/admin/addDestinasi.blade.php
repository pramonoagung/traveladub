@extends('admin.layouts.core')
@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="/"><em class="fa fa-home"></em></a>
                </li>
                <li class="active">
                    Tambah Destinasi
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Destinasi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('status'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="panel panel-default">
                    <form style="padding-top: 20px" id="form" action="/admin/tambah" class="form-horizontal"
                          method="post">
                        {{csrf_field()}}
                        <input style="margin-bottom: 10px" type="text" placeholder="Nama Destinasi" class="textbox"
                               name="judul" required/>
                        <textarea rows="4" cols="50" name="deskripsi" placeholder="Deskripsi" form="form"
                                  class="textarea"></textarea>
                        <input type="text" placeholder="Harga Tiket Masuk" class="textbox" name="harga"/>
                        <textarea rows="4" cols="50" name="fasilitas" placeholder="Fasilitas" form="form"
                                  class="textarea"></textarea>
                        <select name="provinsi" class="textbox">
                            <option disabled selected>Pilih Provinsi</option>
                            @foreach($provs as $prov)
                                <option value="{{$prov->nama}}">{{$prov->nama}}</option>
                            @endforeach
                        </select>
                        <input style="margin-bottom: 10px" type="text" placeholder="Alamat" class="textbox"
                               name="alamat" required/>
                        <input style="margin-bottom: 10px" type="text" placeholder="Nomor Telepon" class="textbox"
                               name="telp" required/>
                        <textarea rows="4" cols="50" name="transportasi" placeholder="Transportasi" form="form"
                                  class="textarea"></textarea>
                        <input type="submit" value="Tambah Destinasi" class="button"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection