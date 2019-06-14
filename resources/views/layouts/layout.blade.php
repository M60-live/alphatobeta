<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Alpha To Beta</title>
  <meta name="description" content="We create web application solutions and professional cutting edge branding for your business.">
  <meta name="keywords" content="Barcode Systems,Branding,CRM,Website,Technology">
  <meta name="author" content="Sipho Maswanganye">
  {{--<meta name="csrf-token" content="{{  csrf_token() }}">--}}
  <meta name="_token" content="{{  csrf_token() }}">

  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/custom1.css')}}" rel="stylesheet" />
  <link href="{{asset('css/hover.css')}}" rel="stylesheet" />
  <link rel="shortcut icon" href="{{{ asset('img/brand.png') }}}" />

  <link href="{{{ asset('font-awesome/css/font-awesome.min.css')}}} "rel="stylesheet" />

  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hvr-pop" href="#page-top"></a>
      </div>

      <nav class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a href="#services" class="hvr-grow-rotate">What We Do</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/apps">Web Apps</a></li>
              <li><a href="/services">Branding</a></li>
            </ul>
          </li>
          <li>
            <a href="#about" class="hvr-grow-rotate">About Us</a>
          </li>
          <li>
            <a href="#team" class="hvr-grow-rotate">Team</a>
          </li>
          <li>
            <a href="#contact" class="hvr-grow-rotate">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>

  {{--<div class="container">--}}
  @yield('content')
  {{--</div>--}}
  @include('incl.footer')
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/cbpAnimatedHeader.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){

  //background header image resizing to screen-size!!!
  var bgImageEle = $('header');
  var overlayEle = $('.header-overlay');
  $(bgImageEle).css("height", (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight));
//    $(bgImageEle).css("width", (window.innerWidth || document.documentElement.innerWidth || document.body.innerWidth)-17);
  $(overlayEle).css("height", (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight));
//      $(overlayEle).css("padding-top", (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight)/3);
  $(window).resize(function(){
    var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var width = window.innerWidth || document.documentElement.innerWidth || document.body.innerWidth;
    var oWidth = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    $(bgImageEle).css("height", height);
//      $(bgImageEle).css("width", width-17);
    $(overlayEle).css("height", height);
//        $(overlayEle).css("padding-top", oWidth/3);
  });
});
</script>
<script>
  $(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 150});

    var status = window.navigator.onLine;
    console.log(status);

  });
</script>
  @yield('javaScript')
</body>
</html>