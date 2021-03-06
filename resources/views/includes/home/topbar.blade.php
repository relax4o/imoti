<!-- Login modal form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="LoginFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body clearfix">
                <div class="text-left">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       @include('partials.loginform')
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Register modal form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="RegisterFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body clearfix">
                <div class="text-left">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('partials.registerform')
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="topbar clearfix">
	<div class="container">
    	<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="marketing">
                    <ul class="topflags pull-right">
                        <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="{{ trans('common.bulgarian') }}" title="" href="{{ url('/lang/bg') }}"><img alt="bg" src="{{ asset('/assets/home/images/flags/bg.png') }}"></a></li>
                        <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="{{ trans('common.english') }}" title="" href="{{ url('/lang/en') }}"><img alt="en" src="{{ asset('/assets/home/images/flags/en.png') }}"></a></li>
                    </ul><!-- end flags -->
                    @unless(Auth::check())
                        <ul class="topmenu pull-right">
                            <li>
                                <a href="#login" data-toggle="modal"><i class="fa fa-sign-in"></i> {{ trans('common.login') }}</a> 
                            </li>
                            <li>
                                <a href="#register" data-toggle="modal"><i class="fa fa-angle-double-right"></i> {{ trans('common.register') }}</a>
                            </li>
                        </ul><!-- topmenu -->
                    @else
                        <ul class="topmenu pull-right">
                            <li>
                                <a href="/profile/dashboard">
                                    <i class="fa fa-user"></i> 
                                    {{ auth()->user()->profiles->display_name }}
                                </a> 
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> {{ trans('common.logout') }}</a> 
                            </li>
                        </ul><!-- topmenu -->
                    @endunless
                </div><!-- end marketing -->
            </div><!-- end col-lg-6 -->
    	</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end topbar -->
@if ( session('status') )
    <div class="alert alert-{{ session('status') }}" id="loginmsg" style="margin-bottom: 0; text-align: center;">
        <strong>{{ session('message') }}</strong>
    </div>
    <script>
    window.onload = function () {
        $('#loginmsg').delay(5000).slideUp(600);
    };
    </script>
@endif