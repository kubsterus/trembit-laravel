@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/recruting.css)
@endsection
@section('content')
	<x-hero-section
		title="We are Trembit - IT company focused on developing video streaming solutions."	
		:btn="[
			'href' => '#',
			'text' => 'Check our hot vacancies'
		]"
		:image="asset('img/hero/01.webp')"

	>
		<x-slot name="content">
			<p class="hero__desc">Less micromanagement and bureaucracy.</p>
			<p class="hero__desc">More responsibility and personal growth of team players.</p>
		</x-slot>
	</x-hero-section>
	@include('sections.recruting.benefits')
	@include('sections.recruting.skills')
	@include('sections.recruting.vacancies')
	@include('sections.recruting.values')
	@include('sections.recruting.steps')
	@include('sections.recruting.gallery')
	@include('sections.recruting.contact')
	@include('sections.recruting.contacts')

@endsection
