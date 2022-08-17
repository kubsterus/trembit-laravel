@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/index.css)
@endsection
@section('content')
	@include('sections.index.titleSection')
	@include('sections.index.case')
	@include('sections.index.industries')
	@include('sections.index.wecreate')
	@include('sections.index.sec-a-3')
	@include('sections.index.partners')
	@include('sections.index.our-platform')
	@include('sections.index.benefits')
	@include('sections.index.feedback')
	@include('sections.index.question')
	@include('sections.index.lets-us')

@endsection