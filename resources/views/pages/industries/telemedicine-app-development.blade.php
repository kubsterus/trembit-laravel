@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.telemedicine-app-development.css)
@endsection
@section('content')
	@include('sections.industries.telemedicine-app-development.titleSection')
	@include('sections.industries.telemedicine-app-development.dating-app')
	@include('sections.industries.telemedicine-app-development.sec-a-3')
	@include('sections.industries.telemedicine-app-development.gr-s-l')
	@include('sections.industries.telemedicine-app-development.slider')
	@include('sections.industries.telemedicine-app-development.feedback')
	@include('sections.industries.telemedicine-app-development.question')
	@include('sections.industries.telemedicine-app-development.lets-us')

@endsection