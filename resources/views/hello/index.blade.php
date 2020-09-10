@extends('layouts.helloapp')

@section('title', 'how to take care of hamster')

@section('introduction')
	<p></p>
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<table>
	@foreach($data as $item)
	<tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
	@endforeach
	</table>
@endsection


