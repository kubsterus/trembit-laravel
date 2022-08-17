@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/mobile-development.css)
@endsection
@section('content')
	@include('sections.mobile-development.titleSection')
	@include('sections.mobile-development.servicesSection')
	@include('sections.mobile-development.sec-a-3')
	@include('sections.mobile-development.slider')
	@include('sections.mobile-development.lets-us')

@endsection