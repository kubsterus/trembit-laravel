@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/software-development.css)
@endsection
@section('content')
	@include('sections.software-development.titleSection')
	@include('sections.software-development.servicesSection')
	@include('sections.software-development.sec-a-3')
	@include('sections.software-development.slider')
	@include('sections.software-development.lets-us')

@endsection