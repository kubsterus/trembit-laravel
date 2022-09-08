@extends('skeleton')

@section('critical_styles')
    {{--	@inlineCss(css/services.desktop-app-development.css)--}}
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Video Streaming Platform Development',
            'image' => asset('view/images/serviceLogoVideostreaming1.webp'),
            'content' => [
                'Streaming is a technology that provides delivery of the content in real time. From small online
                conferences to broadcast major events with a large number of connections.
                <br>
                Streaming video is content sent in compressed form over the Internet and displayed by the viewer
                in real time. With streaming video or streaming media, an end- user does not have to wait to
                download a file to play it. Instead, the media is sent in a continuous stream of data and is
                played as it arrives. An end-user can use their media player to begin to play the data file before
                the entire file has been transmitted.
                <br>
                It&rsquo;s a powerful way for media and entertainment companies to interact with their audience.',
            ],
        ],
        [
            'title' => 'What Is Included?',
            'image' => asset('view/images/serviceLogoVideostreaming2.webp'),
            'content' => [
                [
                    'gathering requirements and offer effective solutions;',
                    'streaming server customization and fine tuning setup;',
                    'developing specialised client applications for the web, desktop and mobile;',
                    'system monitoring and infrastructure support;',
                    'integrate billing and payment systems;',
                    'video recording and hosting.',
                ]
            ]
        ],
        [
            'title' => 'What Should You Expect?',
            'image' => asset('view/images/serviceLogoVideostreaming3.webp'),
            'content' => [
                'Platform for holding webinars, conferences and meetings.
                <br>
                Custom functionality - screen share, photo video and slide sharing, dashboard and white board,
                voting system, dividing participants among rooms during the conference etc.
                <br>
                Functionality is created depending on your needs, whether a search for an e-learning or
                conference platform for your company.',
            ],
        ],
    ]"></x-service-item-section>
@endsection
