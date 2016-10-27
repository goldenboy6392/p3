@extends('layouts.master')

@section('title')
    Random User
@stop

@section('nav')
	<li><a href="/LoremIpsum">Lorem Ipsum Generator</a></li>
@stop

@section('content')
	<h2 class="title">Random User Data</h2>
	<h4>Generate random user data</h4>
@stop

@section('form')
	<div class="form-group">
		<form method ='POST' action='/RandomUser'>
			{{ csrf_field() }}
			<label>How many users do you want to generate?</label><br>
			<input maxlength=3 class="text" type="text" name="number" id="number" value="5">  (Maximum of <strong><ins>99</ins></strong>)<br><br>
			<input type='submit' name='submit' class='btn btn-default' value='Generate New User Data'>
		</form> <br>
	</div>
@stop

@section('formcontent')
<div class='error'>{!! $error !!}</div>
	<div class=generatedusers>
		{!! $userinfo !!}
	</div>
@stop