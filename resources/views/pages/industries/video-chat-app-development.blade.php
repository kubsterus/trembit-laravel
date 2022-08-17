@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.video-chat-app-development.css)
@endsection
@section('content')
	@include('sections.industries.video-chat-app-development.titleSection')
	@include('sections.industries.video-chat-app-development.dating-app')
	@include('sections.industries.video-chat-app-development.sec-a-3')
	@include('sections.industries.video-chat-app-development.gr-s-l')
	@include('sections.industries.video-chat-app-development.slider')
	@include('sections.industries.video-chat-app-development.feedback')
	@include('sections.industries.video-chat-app-development.question')
	@include('sections.industries.video-chat-app-development.lets-us')

@endsection