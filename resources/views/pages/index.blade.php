@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/index.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="video" desktop="{{asset('view/video/Video_desktop_Compress_20.mp4')}}" mobile="{{asset('view/video/Mobile_70_black_Compress_20.mp4')}}"></x-slot>
        <x-slot name="title">
            <h1>Custom video streaming and <br> <span class="red"> WebRTC</span> development </h1>
            <p class="desktop">We build powerful media streaming platforms</p>
            <a href="/contacts.html"><div id="titleButton" class="red-b"><span class="but-as">Get in touch</span></div></a>
        </x-slot>
    </x-title-section>
	<x-case-section></x-case-section>
	<x-industries-component></x-industries-component>
	<x-we-create></x-we-create>
	@include('sections.index.sec-a-3')
	@include('sections.index.partners')
	@include('sections.index.our-platform')
	@include('sections.index.benefits')
	@include('sections.index.feedback')
	@include('sections.index.question')
	<x-lets-us-section></x-lets-us-section>

@endsection
