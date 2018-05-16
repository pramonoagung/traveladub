@extends('forum.layouts.app')
@extends('forum.layouts.header')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 breadcrumbf">

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">


                    <!-- POST -->
                    <div class="post">
                        <form action="#" class="form newtopic" method="post">
                            <div class="postinfotop">
                                <h2>Buat Thread Baru</h2>
                            </div>

                            <!-- acc section -->
                            <div class="accsection">

                                <div class="topwrap">
                                    <div class="userinfo pull-left">

                                    </div>
                                    <div class="posttext pull-left">
                                        <div>
                                            <input type="text" name="judul" placeholder="Judul" class="form-control"/>
                                        </div>
                                        <div>
                                            <textarea name="deskripsi" placeholder="Deskripsi"
                                                      class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!-- acc section END -->

                            <div class="postinfobot">
                                <div class="pull-right postreply">
                                    <div class="pull-left">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div><!-- POST -->

                </div>
                <div class="col-lg-4 col-md-4">

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
                            <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
@extends('forum.layouts.footer')