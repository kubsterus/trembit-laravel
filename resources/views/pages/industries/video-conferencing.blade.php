@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/industries.video-conferencing.css)
@endsection
@section('content')
	@include('sections.industries.video-conferencing.hero')
	@include('sections.industries.video-conferencing.benefits')
	@include('sections.industries.video-conferencing.solutions')
	@include('sections.industries.video-conferencing.peculiarities')
	@include('sections.industries.video-conferencing.technologies')
	@include('sections.industries.video-conferencing.text-img')
	@include('sections.industries.video-conferencing.cases')
	@include('sections.industries.video-conferencing.feedback')
	@include('sections.industries.video-conferencing.qna')
	@include('sections.industries.video-conferencing.contact')

@endsection