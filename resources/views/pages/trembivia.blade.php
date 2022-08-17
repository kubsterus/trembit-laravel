@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/trembivia.css)
@endsection
@section('content')
	@include('sections.trembivia.titleSection')
	@include('sections.trembivia.keyFeaturesSection')
	@include('sections.trembivia.gamePhasesSection')
	@include('sections.trembivia.chooseFromSection')
	@include('sections.trembivia.gamesSection')
	@include('sections.trembivia.scalabilitySection')
	@include('sections.trembivia.producerSection')
	@include('sections.trembivia.blogSection')

@endsection