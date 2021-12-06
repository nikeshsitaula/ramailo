<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/frontend/favicon.png')}}">
    <title>Ramailo Holidays</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/style/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('js/style/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('js/style/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/color/green.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <link href="{{asset('type/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('type/budicons.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="full-layout">


    @include('frontend.includes.nav')
    @include('includes.partials.messages')
    @yield('content')
    @include('frontend.includes.footer')


<!-- Scripts -->
@stack('before-scripts')
{!! script(mix('js/manifest.js')) !!}
{!! script(mix('js/vendor.js')) !!}
{!! script(mix('js/frontend.js')) !!}
@stack('after-scripts')
@include('includes.partials.ga')
<script src="{{asset('js/style/jquery.min.js')}}"></script>
<script src="{{asset('js/style/bootstrap.min.js')}}"></script>
<script src="{{asset('js/style/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('js/style/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('js/style/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/style/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/style/retina.js')}}"></script>
<script src="{{asset('js/style/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/style/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/style/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/style/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2')}}"></script>
<script src="{{asset('js/style/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0')}}"></script>
<script src="{{asset('js/style/jquery.fitvids.js')}}"></script>
<script src="{{asset('js/style/jquery.easytabs.min.js')}}"></script>
<script src="{{asset('js/style/jquery.slickforms.js')}}"></script>
<script src="{{asset('js/style/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('js/style/scripts.js')}}"></script>
</body>
</html>
