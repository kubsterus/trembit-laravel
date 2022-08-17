@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.fitness-app-development.css)
@endsection
@section('content')
	@include('sections.industries.fitness-app-development.titleSection')
	@include('sections.industries.fitness-app-development.dating-app')
	@include('sections.industries.fitness-app-development.sec-a-3')
	@include('sections.industries.fitness-app-development.gr-s-l')
	@include('sections.industries.fitness-app-development.slider')
	@include('sections.industries.fitness-app-development.feedback')
	@include('sections.industries.fitness-app-development.question')
	@include('sections.industries.fitness-app-development.lets-us')

@endsection