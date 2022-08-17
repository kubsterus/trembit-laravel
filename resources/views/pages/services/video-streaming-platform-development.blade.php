@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.video-streaming-platform-development.css)
@endsection
@section('content')
	@include('sections.services.video-streaming-platform-development.servicesItemSection')

@endsection