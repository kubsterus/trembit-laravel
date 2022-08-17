@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/stusan.css)
@endsection
@section('content')
	@include('sections.stusan.solutionprovide')
	@include('sections.stusan.block-s-2q')
	@include('sections.stusan.slider')
	@include('sections.stusan.question')
	@include('sections.stusan.lets-us')

@endsection