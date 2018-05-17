@section('header')
    <div class="headernav">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-xs-3 col-sm-2 col-md-2 logo ">
                    <a href="/"><img src="/assetsForum/images/TL.png" alt=""/></a>
                </div>
                <div class="col-lg-6 search hidden-xs hidden-sm col-md-3">
                    <div class="wrap">
                        <form action="#" method="post" class="form">
                            <div class="pull-left txt"><input type="text" class="form-control"
                                                              placeholder="Cari Postingan"></div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                    <div class="stnt pull-left">
                        <form action="/forum/new-thread" method="get" class="form">
                            <button class="btn btn-primary">Buat Postingan</button>
                        </form>
                    </div>
                    <div class="env pull-left"><i class="fa fa-envelope" style="visibility: hidden"></i></div>

                    <div class="avatar pull-left dropdown">
                        <a data-toggle="dropdown" href="#"><img src="/assetsForum/images/avatar.jpg" alt=""/></a> <b
                                class="caret"></b>
                        <div class="status green">&nbsp;</div>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection