@extends('skeleton')

@section('critical_styles')
{{--	@inlineCss(css/industries.entertainment.css)--}}
@endsection
@section('content')
	@include('sections.industries.entertainment.hero')
	@include('sections.industries.entertainment.benefits')
	@include('sections.industries.entertainment.peculiarities')
	@include('sections.industries.entertainment.cards')
	@include('sections.industries.entertainment.text-img')
	@include('sections.industries.entertainment.cases')
	@include('sections.industries.entertainment.feedback')
	@include('sections.industries.entertainment.qna')
    <x-lets-us-section></x-lets-us-section>
@endsection
