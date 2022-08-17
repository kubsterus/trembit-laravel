@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.webrtc-development.css)
@endsection
@section('content')
	@include('sections.industries.webrtc-development.titleSection')
	@include('sections.industries.webrtc-development.dating-app')
	@include('sections.industries.webrtc-development.sec-a-3')
	@include('sections.industries.webrtc-development.gr-s-l')
	@include('sections.industries.webrtc-development.slider')
	@include('sections.industries.webrtc-development.feedback')
	@include('sections.industries.webrtc-development.question')
	@include('sections.industries.webrtc-development.lets-us')

@endsection