@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/rd.css)
@endsection
@section('content')
	@include('sections.rd.titleSection')
	@include('sections.rd.servicesSection')
	@include('sections.rd.sec-a-3')
	@include('sections.rd.slider')
	@include('sections.rd.lets-us')

@endsection