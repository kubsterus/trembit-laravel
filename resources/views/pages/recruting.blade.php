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
	<x-recruting-contact></x-recruting-contact>
	<x-recruting-contacts>
		<x-slot name="iframe">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.166327970342!2d30.54318601499861!3d50.438002479473674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cfa7c5b45bfb%3A0x8ba229e6c36c0ad7!2z0YPQuy4g0JzQvtGB0LrQvtCy0YHQutCw0Y8sIDIzLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1639910771969!5m2!1sru!2sua" allowfullscreen="" loading="lazy"></iframe>
		</x-slot>
	</x-recruting-contacts>

@endsection
