<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Educare School & College</title>
@include('frontend.includes.assets.css');

</head>

<body>

<!--====== PRELOADER PART START ======-->

@include('frontend.includes.preloader');

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">
@include('frontend.includes.header');

    <div class="navigation">
       @include('frontend.includes.menu');
    </div>

</header>

<!--====== HEADER PART ENDS ======-->

@yield('body')
    <!--====== FOOTER PART START ======-->

    @include('frontend.includes.footer');

    <!--====== FOOTER PART ENDS ======-->
  @include('frontend.includes.assets.js')

</body>
</html>
