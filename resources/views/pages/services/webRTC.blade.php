@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.webRTC.css)
@endsection
@section('content')
	@include('sections.services.webRTC.servicesItemSection')

@endsection