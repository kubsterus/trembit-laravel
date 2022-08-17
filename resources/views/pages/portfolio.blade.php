@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/portfolio.css)
@endsection
@section('content')
	@include('sections.portfolio.titleSection')
	@include('sections.portfolio.lets-us')

@endsection