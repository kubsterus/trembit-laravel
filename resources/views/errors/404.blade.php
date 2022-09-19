@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/404.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <span>OOPS...</span>
            <h1>Page not found</h1>
            <a href="/">
                <div id="titleButton" class="red-b">
                    <span class="but-as">HOME PAGE</span>
                </div>
            </a>
        </x-slot>
        <x-slot name="img" src="{{asset('view/images/not_found.png')}}"></x-slot>
    </x-title-section>
@endsection
