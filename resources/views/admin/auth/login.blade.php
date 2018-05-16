<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> TraveLadub </title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="/loginAssets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/loginAssets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/loginAssets/css/form-elements.css">
    <link rel="stylesheet" href="/loginAssets/css/auth.css">
    <!--<link rel="stylesheet" href="//login2/css/style.css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/loginAssets/img/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/loginAssets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/loginAssets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/loginAssets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/loginAssets/img/ico/apple-touch-icon-57-precomposed.png">


</head>

<body data-template="home">
<div class="o-loader">
    <div class="o-loader_line"></div>
</div>
<div class="o-barba js-barba" id="js-barba-wrapper">
    <div class="js-barba-container o-barba_container" data-template="home">
        <div class="o-scroll" data-module="SmoothScrolling" data-scrollbar>
            <div class="o-wrap">
                <!-- Top content -->
                <div class="top-content">
                    @if (session('status'))
                        <div class="bs-callout bs-callout-default">
                            <h4>
                                {{ session('status') }}
                            </h4>
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="bs-callout bs-callout-warning">
                            <h4>
                                {{ session('warning') }}
                            </h4>
                        </div>
                    @endif
                    <div class="inner-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 text">
                                    <h1>
                                        TraveLadub
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h2><strong>Masuk</strong> ke Admin</h2>
                                            <h5><p>Masukkan email dan password Anda untuk masuk:</p></h5>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="/admin/login" method="post" class="login-form">
                                            {{csrf_field()}}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input type="text" name="email" placeholder="Email" class="form-control"
                                                       value="{{old('email')}}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input type="password" name="password" placeholder="Password"
                                                       class="form-control" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn"><strong>Masuk!</strong></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <style type="text/css">
                    .bs-callout {
                        padding: 10px;
                        border-radius: 3px;
                        background-color: white;
                    }

                    .bs-callout h4 {
                        margin-top: 0;
                        margin-bottom: 5px;
                    }

                    .bs-callout-warning {
                        border-left-color: #f0ad4e;
                    }

                    .bs-callout-warning h4 {
                        color: #f0ad4e;
                    }


                </style>


                <!-- Javascript -->
                <script src="/loginAssets/js/jquery-1.11.1.min.js"></script>
                <script src="/loginAssets/bootstrap/js/bootstrap.min.js"></script>
                <script src="/loginAssets/js/jquery.backstretch.min.js"></script>
                <script src="/loginAssets/js/auth.js"></script>

                <!--[if lt IE 10]>
                <script src="/loginAssets/js/placeholder.js"></script>
                <![endif]-->
            </div>
        </div>
    </div>
</div>

</body>

</html>