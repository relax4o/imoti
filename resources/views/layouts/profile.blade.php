<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.profile.head')
	@yield('styles')
</head>

<body class="animated-content">
	<header id="topnav" class="navbar navbar-black navbar-fixed-top" role="banner">
   		@include('includes.profile.header')
   		@include('includes.profile.menu')
   	</header>

    <div id="wrapper">
        <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-midnightblue">
                <div class="static-sidebar">
                    @include('includes.profile.sidebar')
                </div>
            </div>
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        @yield('content')
                    </div> <!-- #page-content -->
                </div>
                @include('includes.profile.footer')
            </div>
    	</div>
	</div>
	@include('includes.profile.scripts')
    @yield('scripts')
    </body>

<!-- Mirrored from avenxo.kaijuthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jul 2015 10:47:40 GMT -->
</html>