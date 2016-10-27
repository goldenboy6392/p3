@extends('layouts.master')

@section('title')
    Lorem Ipsum
@stop

@section('nav')
	<li><a href="/RandomUser">Random User Generator</a></li>
@stop

@section('content')
	<h2 class="title">Lorem Ipsum</h2>
	<h4>A Filler-Text Generator</h4>
@stop

@section('form')
	<div class="form-group">
		<form method ='POST'>
			{{ csrf_field() }}
			<label>How many paragraphs do you want to generate?</label><br>
			<input maxlength=3 class="text" type="text" name="number" id="number" value="5">  (Maximum of <strong><ins>99</ins></strong>)<br><br>
			<input type='submit' name='submit' class='btn btn-default' value='Generate New Filler Text'>
		</form> <br>
	</div>
@stop

@section('formcontent')
<div class='error'>{!! $error !!}</div>
	<div class="loremipsum">
    	{!! $lipsum->paragraphs($number,'p') !!}
	</div>	
@stop