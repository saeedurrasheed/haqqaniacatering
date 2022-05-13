<!DOCTYPE html>
<html>
	@include('frontend.layout.partials.head')
	<body>
		<!-- Preloader Start -->
		<!-- <div class="cat-preloader">
			<div class="cat-preloader-inner">
				<img src="{{ asset('assets/images/main/loader.gif')}}" alt="loader">
			</div>
		</div> -->

		<!-- Search Box -->
		<!-- <div class="search-box">
			<div class="search-box-container">
				<a href="javascript:void(0);" class="close-btn">
					<svg viewBox="0 0 413.348 413.348" xmlns="http://www.w3.org/2000/svg"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/></svg>
				</a>
				<div class="search-bar-inner">
					<input type="text" placeholder="Search here..." />
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div> -->
		@include('frontend.layout.partials.nav')
		<div class="cat-main-wrapper">
			@yield('content')
		</div>
		@include('frontend.layout.partials.footer')
	</body>
</html>