@extends('skeleton')

@section('critical_styles')
	{{-- @inlineCss(css/industries.video-conferencing.css) --}}
    @inlineCss(css/industries/video-chat-app-development.css)
@endsection
@section('content')
    <x-hero-section title="White-label video conferencing and webinar platform" :image="asset('img/hero/03.webp')"
        text="A white-label video conferencing app is an option for those who need a quality online event solution focusing on their brand and reputation. By purchasing ready-made software from a white label provider, you get rid of the need to wait for the completion of durable and costly development."
        :btn="[
            'href' => '/contacts.html',
            'text' => 'Get in touch',
        ]"
    >
        <x-slot name="content">
            <p class="hero__desc">A white-label video conferencing app is an option for those who need a quality online event solution focusing on their brand and reputation. By purchasing ready-made software from a white label provider, you get rid of the need to wait for the completion of durable and costly development.</p><a class="btn hero__btn" href="/contacts.html">Get in touch</a>
        </x-slot>
    </x-hero-section>
	@include('sections.industries.video-conferencing.benefits')
	@include('sections.industries.video-conferencing.solutions')
	@include('sections.industries.video-conferencing.peculiarities')
	@include('sections.industries.video-conferencing.technologies')
	@include('sections.industries.video-conferencing.text-img')
	@include('sections.industries.video-conferencing.cases')
    <x-feedback></x-feedback>
    <x-qna-section :items="[
        [
            'question' => 'How does video conference white-labeling work?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
        [
            'question' => 'What are the options for customizing your white-label webinar platform?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
        [
            'question' => 'Do you develop White-label conferencing solutions from scratch?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
    ]"></x-qna-section>
	<x-lets-us-section></x-lets-us-section>

@endsection
