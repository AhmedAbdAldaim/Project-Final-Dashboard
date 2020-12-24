<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="../assets/demo/default/media/img/logo/favicon.ico" />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>{{ env('APP_NAME'),'HOSPTAL' }} </title>
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
@include('includes.navbar')
@include('includes.masseges')
	@yield('content')
	<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->
		<script src="{{asset('../assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('../assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

