@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/entertainment.min.css)
@endsection
@section('content')
    <div class="page-entertainment">
        <x-hero-section title="Media and<br>Entertainment Software" :image="asset('img/hero/02.webp')"
            text="As a company with extensive experience in developing solutions for the media and entertainment industry, we have helped hundreds of our customers overcome the challenges in their business areas. We have brilliant developers on our board who, by applying the latest technologies and advances in the field of multimedia, create the most relevant and competitive products."
            :btn="[
                'href' => '/contacts.html',
                'text' => 'Get in touch',
            ]">
            <x-slot name="content">
                <p class="hero__desc">As a company with extensive experience in developing solutions for the media and
                    entertainment industry, we have helped hundreds of our customers overcome the challenges in their
                    business areas. We have brilliant developers on our board who, by applying the latest technologies and
                    advances in the field of multimedia, create the most relevant and competitive products.</p>
            </x-slot>
        </x-hero-section>
        <x-industry-benefits-section></x-industry-benefits-section>
        <x-peculiarities></x-peculiarities>
        <x-cards></x-cards>
        @include('sections.industries.entertainment.text-img')
        @include('sections.industries.entertainment.cases')
        <x-feedback></x-feedback>
        <x-qna-section :items="[
            [
                'question' => 'What technologies do you use to build software for entertainment?',
                'answer' =>
                    'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.',
            ],
            [
                'question' => 'What is the cost of entertainment software development in 2022?',
                'answer' =>
                    'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.',
            ],
            [
                'question' => 'How long does it take to get a custom entertainment software developed?',
                'answer' =>
                    'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.',
            ],
        ]"></x-qna-section>
        <x-lets-us-section></x-lets-us-section>
    </div>
@endsection
