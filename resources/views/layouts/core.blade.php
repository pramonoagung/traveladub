<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- PAGE TITLE -->
    <title>TraveLadub</title>

    <!-- FAVICON ICONS -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="gl-business-template gl-home-template">

<div id="gl-circle-loader-wrapper">
    <div id="gl-circle-loader-center">
        <div class="gl-circle-load">
            <img src="/assets/images/ploading.gif.pagespeed.ce.F6IP4n8LVH.gif" alt="Page Loader">
        </div>
    </div>
</div>

@yield('header')

@yield('content')


<!-- FOOTER -->
@yield('footer')
<!-- FOOTER END -->

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/main.js"></script>
</body>

</html>
