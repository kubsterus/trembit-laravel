@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.project-salvation.css)
@endsection
@section('content')
	@include('sections.services.project-salvation.servicesItemSection')

@endsection