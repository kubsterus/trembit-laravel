@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.css)
@endsection
@section('content')
	@include('sections.services.titleSection')
	@include('sections.services.servicesSection')

@endsection