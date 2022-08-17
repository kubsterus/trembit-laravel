@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.desktop-app-development.css)
@endsection
@section('content')
	@include('sections.services.desktop-app-development.servicesItemSection')

@endsection