@extends('skeleton')

@section('critical_styles')
{{--	@inlineCss(css/industries.entertainment.css)--}}
@endsection
@section('content')
    <x-hero-section title="Media and<br>Entertainment Software" :image="asset('img/hero/02.webp')"
                    text="As a company with extensive experience in developing solutions for the media and entertainment industry, we have helped hundreds of our customers overcome the challenges in their business areas. We have brilliant developers on our board who, by applying the latest technologies and advances in the field of multimedia, create the most relevant and competitive products."
                    :btn="[
            'href' => '/contacts.html',
            'text' => 'Get in touch',
        ]"
    ></x-hero-section>
    <x-services-we-provide title="Services<br>We Provide"
                           :items="[
        [
            'picture' => asset('view/images/industries/smartphone_4.webp'),
            'title' => 'Useful app features for users:',
            'content' => '
                <ul>
                    <li>a workout plan for a person of any level of physical fitness;</li>
                    <li>individual diet plan;</li>
                    <li>wearable device integration</li>
                    <li>recommendations and marathons from a coach or nutritionist;</li>
                    <li>live-streaming workout sessions;</li>
                    <li>reports on progress in achieving the set goals;</li>
                    <li>food and workout diary;</li>
                    <li>gamification.</li>
                </ul>
            '
        ],
        [
            'picture' => asset('view/images/industries/heart-rate.webp'),
            'title' => 'Useful app features for coaches:',
            'content' => '<ul>
                    <li>profile describing competencies and experience;</li>
                    <li>training management;</li>
                    <li>earnings tracking;</li>
                    <li>client base;</li>
                </ul>'
        ],
        [
            'picture' => asset('view/images/industries/plan.webp'),
            'title' => 'Useful app features for admins:',
            'content' => '<ul>
                    <li>coaches and users management;</li>
                    <li>membership plan management;</li>
                    <li>schedule management;</li>
                    <li>challenges management.</li>
                </ul>'
        ],
    ]"></x-services-we-provide>
	@include('sections.industries.entertainment.benefits')
	@include('sections.industries.entertainment.peculiarities')
	@include('sections.industries.entertainment.cards')
	@include('sections.industries.entertainment.text-img')
	@include('sections.industries.entertainment.cases')
    <x-feedback></x-feedback>
    <x-qna-section :items="[
        [
            'question' => 'What technologies do you use to build software for entertainment?',
            'answer' => 'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.'
        ],
        [
            'question' => 'What is the cost of entertainment software development in 2022?',
            'answer' => 'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.'
        ],
        [
            'question' => 'How long does it take to get a custom entertainment software developed?',
            'answer' => 'To create the best and most up-to-date software for entertainment, we use powerful, cutting-edge technologies. It is also important for us to be flexible regarding the application of certain technologies, using specific services, methods and tools for each individual case. In this way, truly custom products are created. <br> Here are just a few of the technologies we work with:<br>Entertainment web application development technologies: HTML, React Native, JS.<br>Video streaming service: Agora.io, Tokbox, EasyRTC.<br>Frameworks: Angular, NodeJS, Spring.<br>Libraries: React.js, jQuery, Docker Python.<br>Programming languages: Javascript, Swift, Kotlin, Java, Python.<br>Streaming Video Service: EasyRTC, Agora.io, Tokbox.<br>Streaming Protocol: WebRTC.<br>Databases: MySQL, PostgreSQL, MongoDB.'
        ],
    ]"></x-qna-section>
    <x-lets-us-section></x-lets-us-section>
@endsection
