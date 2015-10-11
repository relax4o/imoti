@extends('layouts.home')

@section('title', trans('common.register'))

@section('header')
	<section class="post-wrapper-top dm-shadow clearfix">
        <div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">{{ trans('common.home') }}</a></li>
                    <li>{{ trans('common.register') }}</li>
                </ul>
            </div>
        </div>
    </section><!-- end post-wrapper-top -->
@stop

@section('left_sidebar')
	@parent
	<div class="widget clearfix">
		<div class="title"><h3>Banner Ads</h3></div>
		<a href="#"><img src="demos/03_banner.png" alt="" class="img-thumbnail img-responsive"></a>
	</div><!-- end widget -->
@stop

@section('right_sidebar')
	<div class="widget clearfix">
    	<div class="search_widget">
        	<div class="title"><h3><i class="fa fa-search"></i> {{ trans('auth.srch_prop') }}</h3></div>
			<form action="#" id="search_form">
             	<input type="text" class="form-control" placeholder="{{ trans('auth.ph_srch_prop_id_name') }}">     
			</form><!-- end search form -->
        </div><!-- end search_widget -->
    </div><!-- end widget -->
    @parent
@stop

@section('content')

@if ( $errors->any() )
    <div class="alert alert-danger" style="margin-bottom: 0;">
        <ul type="none">
        @foreach ( $errors->all() as $error ) 
            <li><strong class="fa fa-exclamation-circle" style="font-size: 15px"> {{ $error }}</strong></li>
        @endforeach
        </ul>
    </div>
@endif
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
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
</div><!-- end login -->
@stop