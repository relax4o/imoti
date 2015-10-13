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
    @include('partials.registerform')
</div>
@stop