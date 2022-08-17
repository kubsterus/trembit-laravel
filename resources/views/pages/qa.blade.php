@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/qa.css)
@endsection
@section('content')
	@include('sections.qa.titleSection')
	@include('sections.qa.servicesSection')
	@include('sections.qa.sec-a-3')
	@include('sections.qa.slider')
	@include('sections.qa.lets-us')

@endsection