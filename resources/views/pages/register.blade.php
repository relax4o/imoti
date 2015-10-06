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
                    <li><a href="{{ url('/') }}">Начало</a></li>
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
    <div class="alert alert-{{ session('hstatus') }}" id="registermsg" style="margin-bottom: 0; text-align: center;">
        <strong>{{ session('message') }}</strong>
    </div>
@endif
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
   	<div class="widget clearfix">
        <div class="title">
            <h3>Регистрация</h3>
        </div>
        <form id="registerform" method="post" name="registerform" action="{{ url('/register') }}">
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
</div><!-- end login -->
@stop

@section('scripts')
<script>
$('#registermsg').delay(5000).slideUp(600);
</script>
@stop