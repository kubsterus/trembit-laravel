@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.web-app-development.css)
@endsection
@section('content')
	@include('sections.services.web-app-development.servicesItemSection')

@endsection