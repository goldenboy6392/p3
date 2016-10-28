@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')
	<h2 class='title'>Project 3</h2>
	<h4 style='text-decoration: underline;'>A Web Developers Best Friend</h4>
	<br>
	<h3>Lorem Ipsum</h3>
	<h4>A Filler-Text Generator</h4>
		<blockquote>
			In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.<sup><a href="https://en.wikipedia.org/wiki/Lorem_ipsum">1</a></sup>
		</blockquote>
		This tool helps you create dummy text for all your layout needs:
		<a class='homepagelink' href="../LoremIpsum">Click Here</a>
		<br>
		<br>
	<h3>Random User Generator</h3>
	<h4>Randomize user data</h4>
		<p>
		This tool will generate random user data for your applications:
		<a class='homepagelink' href="../RandomUser">Click Here</a>
		</p>
@stop