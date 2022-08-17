@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/vatra.css)
@endsection
@section('content')
	@include('sections.vatra.solutionprovide')
	@include('sections.vatra.block-s-2q')
	@include('sections.vatra.slider')
	@include('sections.vatra.question')
	@include('sections.vatra.lets-us')

@endsection