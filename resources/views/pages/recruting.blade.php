@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/recruting.css)
@endsection
@section('content')
	@include('sections.recruting.hero')
	@include('sections.recruting.benefits')
	@include('sections.recruting.skills')
	@include('sections.recruting.vacancies')
	@include('sections.recruting.values')
	@include('sections.recruting.steps')
	@include('sections.recruting.gallery')
	@include('sections.recruting.contact')
	@include('sections.recruting.contacts')

@endsection