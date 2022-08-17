@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/ui-ux.css)
@endsection
@section('content')
	@include('sections.ui-ux.titleSection')
	@include('sections.ui-ux.servicesSection')
	@include('sections.ui-ux.sec-a-3')
	@include('sections.ui-ux.slider')
	@include('sections.ui-ux.lets-us')

@endsection