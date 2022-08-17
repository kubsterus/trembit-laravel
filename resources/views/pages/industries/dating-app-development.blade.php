@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.dating-app-development.css)
@endsection
@section('content')
	@include('sections.industries.dating-app-development.titleSection')
	@include('sections.industries.dating-app-development.dating-app')
	@include('sections.industries.dating-app-development.sec-a-3')
	@include('sections.industries.dating-app-development.gr-s-l')
	@include('sections.industries.dating-app-development.slider')
	@include('sections.industries.dating-app-development.feedback')
	@include('sections.industries.dating-app-development.question')
	@include('sections.industries.dating-app-development.lets-us')

@endsection