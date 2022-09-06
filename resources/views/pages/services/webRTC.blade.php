@extends('skeleton')

@section('critical_styles')
    {{--	@inlineCss(css/services.desktop-app-development.css)--}}
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'WebRTC Applications Development',
            'image' => asset('view/images/serviceLogoWebRTC.webp'),
            'content' => [
                '<a href=\'https://trembit.com/blog/modern-webrtc-video-conferencing-applications/\'>WebRTC</a>
                is a secure open source technology and it&rsquo;s all about real-time communication via peer-to-peer connections.
                <br>
                We create rich WebRTC video chat applications that works both in web browsers and standalone applications.
                <br>
                WebRTC is being used by Google, Mozilla, Opera and Microsoft. And WebRTC is a plugin-free technology.
                <br>
                Often we combine video streaming servers like Wowza and Red5 together with WebRTC to achieve great functionality across all popular devices and browsers.',
            ],
        ],
    ]"></x-service-item-section>
@endsection
