@extends('forum.layouts.app')
@extends('forum.layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <!-- POST -->
                <div class="post">
                    <div class="wrap-ut pull-left">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="/assetsForum/images/avatar.jpg" alt="" />
                                <div class="status green">&nbsp;</div>
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2><a href="/forum/thread-detail">Indahnya Pantai 3 Warna</a></h2>
                            <p>Minggu lalu saya dan keluarga pergi ke pantai 3 warna, disana pemandangannya sangat bagus, ada 3 warna dipantainya. Pasirnya warna putih seputih salju.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="postinfo pull-left">
                        <div class="comments">
                            <div class="commentbg">
                                560
                                <div class="mark"></div>
                            </div>

                        </div>
                        <div class="views"><i class="fa fa-eye"></i> 1,568</div>
                        <div class="time"><i class="fa fa-clock-o"></i> 24 min</div>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- POST -->


                <!-- POST -->
            </div>
            <div class="col-lg-4 col-md-4">

                <!-- -->
                <div class="sidebarblock">
                    <h3 style="color: blue"><b>Categories</b></h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="#">Wisata Alam <span class="badge pull-right">20</span></a></li>
                            <li><a href="#">Taman Rekreasi <span class="badge pull-right">10</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3 style="color: red"><b>Hot Threads</b></h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Indahnya Pantai 3 Warna</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@extends('forum.layouts.footer')