@extends('skeleton')

@section('critical_styles')
    {{--	@inlineCss(css/services.desktop-app-development.css)--}}
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Project Salvation',
            'image' => asset('view/images/serviceLogoSalvation1.webp'),
            'content' => [
                'You need help in the rescue of the project when there is no hope for its recovery or you went
                over budget, or product quality is out of control and entails the emergence of new bugs we
                will help you with this.
                <br>
                Project salvation is a service of project recovery and updating your application.
                It is a limited period of strong intervention taking drastic actions to save the project.
                Our QA engineers will test your application and our developers team will fix it and clean it
                from bugs. We will restore the &ldquo;lost&rdquo; or broken repositories of source code and much more.
                Functional and performance testing is applied when it needed.',
            ],
        ],
        [
            'title' => 'What Is Included?',
            'image' => asset('view/images/serviceLogoSalvation2.webp'),
            'content' => [
                [
                    'estimation and analysis of current state, and ways of project salvation;',
                    'a comprehensive recovery plan;',
                    'resolving problematic technical issues;',
                    'rewriting or elimination of errors;',
                    'tuning of inefficient databases;',
                    'functional and performance testing, and regression testing.',
                ]
            ]
        ],
        [
            'title' => 'What Should You Expect?',
            'image' => asset('view/images/serviceLogoSalvation3.webp'),
            'content' => [
                'Our main task is to make your application bug free and reliable.
                <br>
                We offer our clients a full range of salvation processes of any applications (web, mobile,
                desktop etc.). Effective recovery plan and all necessary actions to fulfil it.
                <br>
                We will provide a full stack of all bug fixing actions and we could redevelop a non-working
                elements of your system, as well as to support the functionality of your product.',
            ],
        ],
    ]"></x-service-item-section>
@endsection
