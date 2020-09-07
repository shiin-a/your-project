@extends('layouts.helloapp')

@section('title', 'Index')

@section('content')
	<p>I want to go to US.</p>
	
	@component('components.message')
		@slot('msg_title')
		CAUSION!
		@endslot

		@slot('msg_content')
			this is message
		@endslot
	@endcomponent
@endsection


