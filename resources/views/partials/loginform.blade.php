<div class="widget clearfix">
    <div class="title">
        <h3>{{ trans('common.login') }}</h3>
    </div>
    <form id="loginform" method="post" name="loginform" action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="{{ trans('auth.ph_username_email') }}" name="username">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="{{ trans('auth.ph_password') }}" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label> 
                    <input type="checkbox" name="remember"> {{ trans('common.remember') }}!
                </label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="{{ trans('auth.btn_login') }}">
        </div>
    </form>
    </div>
</div>