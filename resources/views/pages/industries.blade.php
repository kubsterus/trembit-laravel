@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.css)
@endsection
@section('content')
	@include('sections.industries.titleSection')

@endsection