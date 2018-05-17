@extends('layouts.core')
@extends('layouts.header')
@extends('layouts.footer')
@section('content')
    <!-- FEATURED LISTINGS -->
    <section class="gl-feat-listing-section gl-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="gl-section-headings">
                    <h1 style="color:#d63031">Edit Profile</h1>
                </div>
                @if ($message = Session::get('status'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div>
                    <form action="/profile/{{Auth::user()->id}}/edit/save">
                        <div class="form-group">
                            <label style="color:#d63031" for="namalengkap" class="control-label" style="font-size: 20px"
                                   readonly>Nama</label>
                            <input type="text" class="form-control" id="namalengkap" name="nama"
                                   value="{{Auth::user()->name}}" style="height: 50px" required>
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label style="color:#d63031" for="ttl" class="control-label" style="font-size: 20px">Tanggal Lahir</label>--}}
                        {{--<input type="date" class="form-control" id="ttl" name="ttl" style="height: 50px">--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label style="color:#d63031" for="email" class="control-label"
                                   style="font-size: 20px">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda"
                                   value="{{Auth::user()->email}}" name="email" style="height: 50px" required>
                        </div>

                        <div class="form-group">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary"
                                    style="font-size:20px;height: 50px;width: 100%;background-color: #d63031">Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection