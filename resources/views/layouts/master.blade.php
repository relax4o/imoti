<!DOCTYPE html>
<html>
	<head>
		 @include('includes.head')
		 @yield('styles')
	</head>

	<body>
		@include('includes.topbar')
		@include('includes.header')

		@if( !(substr(parse_url(URL::current(), PHP_URL_PATH), 1)) )
			@include('includes.top_estates')
		@endif
		<section class="generalwrapper dm-shadow clearfix">
        	<div class="container">
            	<div class="row">
            		<div id="left_sidebar" class="col-lg-2 col-md-3 col-sm-3 col-xs-12 first clearfix">
            		@section('left_sidebar')
            			@include('includes.left_sidebar')
            		@show
            		</div>

            		<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
					@yield('content')
					</div>

					<div id="right_sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 last clearfix">
            		@section('right_sidebar')
            			@include('includes.right_sidebar')
            		@show
            		</div>
				</div>
			</div>
		</section>

		@include('includes.footer')
		@include('includes.scripts')
	</body>
</html>