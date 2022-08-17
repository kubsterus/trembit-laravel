@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/contacts_formkeep.css)
@endsection
@section('content')
	@include('sections.contacts_formkeep.cont-m')
	@include('sections.contacts_formkeep.lets-us')
	@include('sections.contacts_formkeep.container col-xs-12 col-sm-8 col-sm-offset-2 col-xl-6 col-xl-offset-3 my-4')

@endsection