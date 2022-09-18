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
	<x-recruting-benefits></x-recruting-benefits>
	<x-recruting-skills></x-recruting-skills>	
	<x-recruting-vacancies></x-recruting-vacancies>
	<x-recruting-values></x-recruting-values>
	<x-recruting-steps></x-recruting-steps>
	<x-recruting-gallery></x-recruting-gallery>
	@include('sections.recruting.contact')
	@include('sections.recruting.contacts')

@endsection
