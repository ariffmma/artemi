<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Artemi Official Sites</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('/css/open-iconic-bootstrap.min.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/animate.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/magnific-popup.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/aos.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/ionicons.min.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/bootstrap-datepicker.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/jquery.timepicker.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/flaticon.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/icomoon.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/style.css?ver=')}}{{ date('YmdHis')}}">
		<link rel="stylesheet" href="{{asset('/css/custom.css?ver=')}}{{ date('YmdHis')}}">
	</head>
	<body> 
        @include('pages.homepage.navbar') 
		@include('pages.homepage.section1') <!-- Main slider -->
		@include('pages.homepage.section2') <!-- Slider news -->
		@include('pages.homepage.section3') <!-- Featured Products -->
		@include('pages.homepage.section4') <!-- About -->
		@include('pages.homepage.section5') <!-- Recent News -->
		@include('pages.homepage.section6') <!-- Official Partner -->
		@include('pages.homepage.footer') 
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen">
			<svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
			</svg>
		</div>
		<script>
			const filterContainer = document.querySelector(".gallery-filter"),
			galleryItems = document.querySelectorAll(".gallery-item");
			filterContainer.addEventListener("click", (event) =>{
			  if(event.target.classList.contains("filter-item")){
				   // deactivate existing active 'filter-item'
				   filterContainer.querySelector(".active").classList.remove("active");
				   // activate new 'filter-item'
				   event.target.classList.add("active");
				   const filterValue = event.target.getAttribute("data-filter");
				   galleryItems.forEach((item) =>{
				  if(item.classList.contains(filterValue) || filterValue === 'all'){
					  item.classList.remove("hide");
					   item.classList.add("show");
				  }
				  else{
					  item.classList.remove("show");
					  item.classList.add("hide");
				  }
				   });
			  }
			});
		</script>
		<script src="{{asset('/js/jquery.min.js')}}"></script>
		<script src="{{asset('/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('/js/popper.min.js')}}"></script>
		<script src="{{asset('/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('/js/aos.js')}}"></script>
		<script src="{{asset('/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('/js/jquery.timepicker.min.js')}}"></script>
		<script src="{{asset('/js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('/js/google-map.js')}}"></script>
		<script src="{{asset('/js/main.js')}}"></script>
	</body>
</html>