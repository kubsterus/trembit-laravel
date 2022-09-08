@extends('skeleton')

@section('critical_styles')
{{--	@inlineCss(css/services.desktop-app-development.css)--}}
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Desktop App Development',
            'image' => asset('view/images/serviceLogoDesktop1.webp'),
            'content' => [
                'It\'s hard to imagine the modern world without computers and laptops. Therefore,
                in our lives, we often use various types of desktop applications. For more effective work,
                you may need quick and easy applications.<br>
                Trembit provides custom software development services. We have a wide experience in developing
                desktop applications in various spheres. Applications that we developed are being used for
                access control, security software, provision of video streaming, salesforce integration platforms
                and games for cognitive training.<br>
                With cross-platform development, you are able to use desktop applications on different operation systems'
            ]
        ],
        [
            'title' => 'What Is Included?',
            'image' => asset('view/images/serviceLogoDesktop2.webp'),
            'content' => [
                [
                    'design and development;',
                    'multiplatform app development (Windows, Mac and Linux);',
                    'rich functionality and friendly user interface;',
                    'introduction of new technologies and tools;',
                    'performance and usability testing.',
                ]
            ]
        ],
        [
            'title' => 'What Should You Expect?',
            'image' => asset('view/images/serviceLogoDesktop3.webp'),
            'content' => [
                'We offer a full range of development processes of the desktop applications.<br>
                Trembit creates reliable, innovative, up-to-date software according to latest technical
                trends and aligned with customer requirements.<br>
                Working with our desktop app development team offers the following advantages:',
                [
                    'detailed business analysis',
                    'expertise in a wide range of industries;',
                    'effective management structure;',
                    'a convenient library of existing code components;',
                    'quick and cost-effective development cycle;',
                ]
            ]
        ],
    ]"></x-service-item-section>
@endsection
