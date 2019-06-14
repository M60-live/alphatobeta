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
  <meta name="csrf-token" content="{{  csrf_token() }}">

  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  <link href="{{asset('css/hover.css')}}" rel="stylesheet">
  <link href="{{asset('img/brand.png')}}" type="shortcut icon">

  <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" type="text/css">

  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <style>
  .error{
	  color:#15BDBD;
	  font-size:12em;
	  font-style:bold;
	  font-weight:700;
  }
  </style>
</head>
<body id="contact">
  <section class="header-overlay" style="background-color: rgba(189, 216, 221, 0.9);">
	  <br>
	  <br>
	  <div class="container-fluid">
		<div class="row">
		  <div class="col col-md-12 text-center">
			{{--<img src="img/404-page-sample.jpg" class="img-responsive img-centered" style="box-shadow: 2px 4px 10px #999"/>--}}
			<h1 class="text-muted error"><b>4<span class="glyphicon glyphicon-globe"></span>4</b></h1>
			<h3 class="text-center"><b class="text-muted">Sorry! Page not found</b></h3>
			<a href="/" class="btn btn-default">Back To Site</a>
		  </div>
		</div>
		
	  </div>
  </section>
</body>
</html>