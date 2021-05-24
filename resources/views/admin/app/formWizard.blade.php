<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>App Calender - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
 <!-- END: Vendor CSS-->

 <!-- BEGIN: Theme CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

 <!-- BEGIN: Page CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/wizard.css')}}">
 <!-- END: Page CSS-->

 <!-- BEGIN: Custom CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
 <!-- END: Custom CSS-->


<style>
a:hover{
   text-decoration: none;
 }
 a{
   text-decoration: none;
 }
.input-file-container {
	position: relative;
	width: 225px;
}

.input-file-trigger {
	display: block;
	padding: 10px 25px;
	color: #fff;
	font-size: 1em;
	transition: all .4s;
	cursor: pointer;
}

.input-file {
	position: absolute;
	top: 0;
	left: 0;
	width: 225px;
	padding: 14px 0;
	opacity: 0;
	cursor: pointer;
}

/* quelques styles d'interactions */
.input-file:hover + .input-file-trigger,
.input-file:focus + .input-file-trigger,
.input-file-trigger:hover,
.input-file-trigger:focus {
	background: #34495E;
	color: #39D2B4;
}

/* styles du retour visuel */
.file-return {
	margin: 0;
}
.file-return:not(:empty) {
	margin: 1em 0;
}

.file-return {
	font-style: italic;
	font-weight: bold;
}

/* on complète l'information d'un contenu textuel uniquement lorsque le paragraphe n'est pas vide */
.file-return:not(:empty):before {
	content: "Selected file: ";
	font-style: normal;
	font-weight: normal;
} */
</style>

</head>
<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

        <!-- End of Topbar -->
      @yield('content')
      
      @include('admin.include.footer')
 <!-- BEGIN: Content-->
    
 <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 {{-- <script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script> --}}
 <script src="{{asset('app-assets/vendors/js/extensions/jquery.steps.min.js')}}"></script>
 {{-- <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 {{-- <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script> --}}
 <script src="{{asset('app-assets/js/core/app.js')}}"></script> 
 <script src="{{asset('app-assets/js/scripts/components.js')}}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{asset('app-assets/js/scripts/forms/wizard-steps.js')}}"></script>
 <!-- END: Page JS-->
 <script src="{{asset('app-assets/FormWizard.js')}}"></script>
</body>
</html>