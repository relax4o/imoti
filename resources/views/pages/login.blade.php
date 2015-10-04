@extends('layouts.master')

@section('title', 'Вход')

@section('header')
	<section class="post-wrapper-top dm-shadow clearfix">
        <div class="container">
            <div class="post-wrapper-top-shadow">
                <span class="s1"></span>
            </div>
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{ URL::to('/') }}">Начало</a></li>
                    <li>Вход</li>
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
        	<div class="title"><h3><i class="fa fa-search"></i> Search For Property</h3></div>
			<form action="#" id="search_form">
             	<input type="text" class="form-control" placeholder="Search by ID or property name...">     
			</form><!-- end search form -->
        </div><!-- end search_widget -->
    </div><!-- end widget -->
    @parent
@stop

@section('content')

@if ( session('hstatus') )
    <div class="alert alert-{{ session('hstatus') }}" id="loginmsg" style="margin-bottom: 0; text-align: center;">
        <strong>{{ session('message') }}</strong>
    </div>
@endif
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
   	<div class="widget clearfix">
        <div class="title">
            <h3>Вход</h3>
        </div>
        <form id="loginform" method="post" name="loginform" action="/login">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Потребителско име или е-mail" name="username">
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
@stop

@section('scripts')
<script>
window.setTimeout(function () {
    $('#loginmsg').toggle(1000);
}, 5000);
</script>
@stop