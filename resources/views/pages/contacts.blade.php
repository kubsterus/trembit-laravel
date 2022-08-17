@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/contacts.css)
@endsection
@section('content')
	@include('sections.contacts.lets-us')
	@include('sections.contacts.cont-m')

@endsection