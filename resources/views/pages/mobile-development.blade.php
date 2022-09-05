@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/mobile-development.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>Mobile Development</h1>
            <picture><source srcset="{{asset('view/images/services/1-line-android.webp')}}" type="image/webp"><img class="img-android" src="{{asset('view/images/services/1-line-android.webp')}}" alt="line android"></source></picture>
            <picture><source srcset="{{asset('view/images/services/2-line-iPhone.webp')}}" type="image/webp"><img class="img-iphone" src="{{asset('view/images/services/2-line-iPhone.png')}}" alt="line iPhone"></source></picture>
        </x-slot>
    </x-title-section>
    <x-services-section title="Mobile Services" :items="[
        [
            'title' => 'Cross platform mobile',
            'image' => asset('view/images/icon/Mobile_services_1.1.svg'),
            'shadow_image' => asset('view/images/icon/shadow_light_blue.webp'),
            'list' => [
                'Integration with existing software and hardware',
                'Creation of complex solutions from scratch',
                'Architectural solutions for mobile applications',
                'APIs and 3rd-party integrations'
            ]
        ],
        [
            'title' => 'IOS development',
            'image' => asset('view/images/icon/Mobile_services_1.2.svg'),
            'shadow_image' => asset('view/images/icon/shadow_blue.webp'),
            'list' => [
                'IPhone, iPad, Apple Watch',
                'Log aggregation and analysis',
                'Native app development using Swift, SwiftUI, Combine, RxSwift',
                'CarPlay and Apple TV'
            ]
        ],
        [
            'title' => 'Android development',
            'image' => asset('view/images/icon/Mobile_services_1.3.svg'),
            'list' => [
                'Tablets, Android TV',
                'Live-streaming delivery',
                'Native app development using Kotlin, JetPack, RxJava',
                'Android Auto and WearOS'
            ]
        ]
    ]"></x-services-section>
    <x-service-features-section :left="[
            [
                'title' => 'Android',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ]
        ]"

        :right="[
            [
                'title' => 'IOS',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ],
            [
                'title' => 'Cross-Platform',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.',
                'top_space' => true
            ]
        ]">
        <x-slot name="title">
            Mobile development
        </x-slot>
        <x-slot name="description">
            In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES"></x-slider-section>
    <x-lets-us-section></x-lets-us-section>
@endsection
