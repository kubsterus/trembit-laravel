@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/about.css)
@endsection
@section('content')
	@include('sections.about.titleSection')
	@include('sections.about.foundersSection')
	@include('sections.about.staticticsSection')
	@include('sections.about.lets-us')

@endsection