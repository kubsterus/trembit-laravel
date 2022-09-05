@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/about.css)
@endsection
@section('content')
	<x-title-section>
        <x-slot name="title">
            <h1>About Us</h1>
            <p>We help you achieve business goals by developing video streaming solutions with operational excellence</p>
        </x-slot>
    </x-title-section>
    <x-founders-section :founders="[
        [
            'photo' => asset('view/images/Zayarsky400.webp'),
            'name' => 'Stanislav Zayarsky',
            'position' => 'Trembit CEO',
            'quote' => 'Trembit specializes in middle and enterprise level applications, seamlessly integrated with large data sets, through rich and dynamic user interfaces.',
            'linkedin' => 'https://www.linkedin.com/in/zayarsky/?originalSubdomain=ua',
            'email' => 'sz@trembit.com'
        ],
        [
            'photo' => asset('view/images/Reshetnyk400.webp'),
            'name' => 'Stanislav Reshetnyk',
            'position' => 'Trembit CTO',
            'quote' => 'Trembit efficiently works with large organizations as well as startups utilizing Agile methodologies to deliver full featured functionality.',
            'linkedin' => 'https://www.linkedin.com/in/stanreshetnyk/?originalSubdomain=ua',
            'email' => 'sr@trembit.com'
        ]
    ]"/>
    <x-statistics-section :items="[
        [
            'image' => asset('view/images/new-project.webp'),
            'value' => 127,
            'title' => 'Finalized projects'
        ],
        [
            'image' => asset('view/images/project-management.webp'),
            'value' => 8,
            'title' => 'In-work projects'
        ],
        [
            'image' => asset('view/images/mission.webp'),
            'value' => '90.1%',
            'title' => 'Effectiveness ratio'
        ]
    ]"/>
    <x-lets-us-section />
@endsection
