@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.node-red.css)
@endsection
@section('content')
	@include('sections.services.node-red.servicesItemSection')

@endsection