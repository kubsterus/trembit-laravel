@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/web-development.css)
@endsection
@section('content')
	@include('sections.web-development.titleSection')
	@include('sections.web-development.servicesSection')
	@include('sections.web-development.sec-a-3')
	@include('sections.web-development.slider')
	@include('sections.web-development.lets-us')

@endsection