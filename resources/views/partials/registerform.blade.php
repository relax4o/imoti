<div class="widget clearfix">
    <div class="title">
        <h3>{{ trans('common.register') }}</h3>
    </div>
    <form id="registerform" method="post" name="registerform" action="{{ url('/register') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{ trans('auth.ph_username') }}" name="username" maxlength="50" value="{{ old('username') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="{{ trans('auth.ph_display_name') }}" name="display_name" maxlength="50" value="{{ old('display_name') }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="{{ trans('auth.ph_email') }}" name="email" maxlength="60" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="{{ trans('auth.ph_password') }}" name="password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="{{ trans('auth.ph_confirm_password') }}" name="confirm_password">
        </div>
        <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="entity_type" value="0"> {{ trans('auth.ph_individual_entity') }}
            </label>
            <label class="radio-inline">
                <input type="radio" name="entity_type" value="1"> {{ trans('auth.ph_legal_entity') }}
            </label>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="{{ trans('auth.btn_send') }}">
        </div>
    </form>
</div>