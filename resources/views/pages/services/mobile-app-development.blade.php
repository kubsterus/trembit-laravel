@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services/mobile-app-development.css)
@endsection
@section('content')
	@include('sections.services.mobile-app-development.servicesItemSection')
@endsection
