<!-- Login modal form -->
<div class="modal fade" id="LoginFormModal" tabindex="-1" role="dialog" aria-labelledby="LoginFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body clearfix">
                <div class="text-left">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="widget clearfix">
                            <div class="title">
                                <h3>Вход</h3>
                            </div>
                            <form id="loginform" method="post" name="loginform" action="/login">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Потребителско име или e-mail" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Парола" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label> 
                                            <input type="checkbox" name="remember"> Запомни ме!
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Влез">
                                </div>
                            </form>
                            </div>
                        </div><!-- end login -->
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Register modal form -->
<div class="modal fade" id="RegisterFormModal" tabindex="-1" role="dialog" aria-labelledby="RegisterFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body clearfix">
                <div class="text-left">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget clearfix">
                            <div class="title">
                                <h3>Регистрация</h3>
                            </div>
                            <form id="registerform" method="post" name="registerform" action="#">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Re-enter password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Изпрати">
                                </div>
                            </form>
                            </div>
                        </div><!-- end register -->
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
                        <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="German" title="" href="#"><img alt="de" src="images/flags/de.png"></a></li>
                        <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Turkish" title="" href="#"><img alt="tr" src="images/flags/tr.png"></a></li>
                        <li><a data-placement="bottom" data-toggle="tooltip" data-original-title="Greek" title="" href="#"><img alt="gr" src="images/flags/gr.png"></a></li>
                    </ul><!-- end flags -->
                    @if(!Auth::check())
                        <ul class="topmenu pull-right">
                            <li>
                                <a href="#LoginFormModal" data-toggle="modal"><i class="fa fa-sign-in"></i> Вход</a> 
                            </li>
                            <li>
                                <a href="#RegisterFormModal" data-toggle="modal"><i class="fa fa-angle-double-right"></i> Регистрация</a>
                            </li>
                        </ul><!-- topmenu -->
                    @else
                        <ul class="topmenu pull-right">
                            <li>
                                <a href="/profile"><i class="fa fa-user"></i> {{ Auth::user()->display_name }}</a> 
                            </li>
                            <li>
                                <a href="/logout"><i class="fa fa-sign-out"></i> Изход</a> 
                            </li>
                        </ul><!-- topmenu -->
                    @endif
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
    window.setTimeout(function () {
        $('#loginmsg').slideUp(600);
    }, 5000);
    </script>
@endif