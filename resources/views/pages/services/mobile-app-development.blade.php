@extends('skeleton')

@section('critical_styles')
    {{--	@inlineCss(css/services.desktop-app-development.css)--}}
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Mobile App Development',
            'image' => asset('view/images/serviceLogoMobile.webp'),
            'content' => [
                'Over the last decade mobile technologies have radically changed the world. They dominate in
                various domains of human life such as: healthcare, finance, marketing, telecommunications,
                security, media and entertainment. Modern mobile apps help us boost productivity, establish
                innovative communication channels and optimize business processes.
                <br>
                Trembit offers mobile applications development applicable in the following areas:',
                [
                    'mHealth',
                    'eCommerce',
                    'media streaming',
                    'customer relationship systems',
                    'staff tracking systems',
                    'platforms for online conferences, video chats and webinars.',
                ],
                'Our mobile app development service embraces both major mobile platforms:
                 Android and iOS (iPhone/iPod/iPad).'
            ],
        ],
        [
            'title' => 'What Is Included?',
            'image' => asset('view/images/serviceLogoMobile2.webp'),
            'content' => [
                [
                    'mobile platforms application development;',
                    'mobile version for existing applications, including legacy systems;',
                    'desktop applications conversion to mobile devices;',
                    'UI/UX for mobile devices;',
                    'comprehensive API integration with popular platforms and social networks',
                    'performance and usability testing;',
                ]
            ]
        ],
        [
            'title' => 'What Should You Expect?',
            'image' => asset('view/images/serviceLogoMobile3.webp'),
            'content' => [
                ' We create reliable, innovative, up-to-date software in line with latest technical trends
                and aligned with customer requirements.
                <br>
                Our mobile app development team offers the following advantages:',
                [
                    'comprehensive business analysis',
                    'expertise in a wide range of industries;',
                    'effective management structure;',
                    'a convenient library of existing code components;',
                    'quick and cost-effective development cycle;',
                ]
            ]
        ],
    ]"></x-service-item-section>
@endsection
