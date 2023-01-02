<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Vue</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="assets/css/font_lao.css">
    
    <!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

<!-- Icons css -->
<link href="assets/css/icons.css" rel="stylesheet">

<!-- Bootstrap css -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--  Owl-carousel css-->
<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

<!-- P-scroll bar css-->
<link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

<!--  Right-sidemenu css -->
<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

<!-- Sidemenu css -->
<link rel="stylesheet" href="assets/css/sidemenu.css">

<!-- Maps css -->
<link href="assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

<!-- style css -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-dark.css" rel="stylesheet">
<link href="assets/css/boxed.css" rel="stylesheet">
<link href="assets/css/dark-boxed.css" rel="stylesheet">

<!---Skinmodes css-->
<link href="assets/css/skin-modes.css" rel="stylesheet" />

</head>
<body class="main-body app sidebar-mini">


		@if(Auth::check())
			@php
			$user_auth_data = [
				'isLoggedin_laravel' => true,
				'user' =>  Auth::user(),
				'urlpath' =>'',
			];
			@endphp
		@else
			@php
			$user_auth_data = [
				'isLoggedin_laravel' => false
			];
			@endphp
		@endif
		
		<script>
			window.Laravel = JSON.parse(atob('{{ base64_encode(json_encode($user_auth_data)) }}'));
		</script>


<div id="vue-app"></div>
		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- /Loader -->

		<!-- Page -->
		
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--Internal  Chart.bundle js -->
		<!-- <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script> -->

		<!-- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<!-- <script src="assets/plugins/moment/moment.js"></script> -->

		<!--Internal Sparkline js -->
		<!-- <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> -->

		<!-- Moment js -->
		<!-- <script src="assets/plugins/raphael/raphael.min.js"></script> -->

		<!--Internal Apexchart js-->
		<!-- <script src="assets/js/apexcharts.js"></script> -->

		<!-- Rating js-->
		<!-- <script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script> -->

		<!--Internal  Perfect-scrollbar js -->
		<!-- <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script> -->

		<!-- Eva-icons js -->
		<!-- <script src="assets/js/eva-icons.min.js"></script> -->

		<!-- right-sidebar js -->
		<!-- <script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script> -->

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>
		<script src="assets/js/modal-popup.js"></script>

		<!-- Left-menu js-->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Internal Map -->
		<!-- <script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->

		<!--Internal  index js -->
		<!-- <script src="assets/js/index.js"></script> -->

		<!-- Apexchart js-->
		<!-- <script src="assets/js/apexcharts.js"></script>
		<script src="assets/js/jquery.vmap.sampledata.js"></script> -->

		<!-- custom js -->
		<script src="assets/js/custom.js"></script>


   
    <script src="{{ mix('js/app.js') }}" type="text/javascript" ></script>
</body>
</html>