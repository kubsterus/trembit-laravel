@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/services/mobile-app-development.css)
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Web App Development',
            'image' => asset('view/images/serviceLogoWeb1.webp'),
            'content' => [
                'Over the past decade,  the web has been embraced by millions of businesses as a cost-effective
                and inexpensive channel to communicate and exchange information and transactions with customers.
                <br>
                Trembit is a development team with experience in implementing successful web solutions. Our
                solutions in web applications development cover a variety of areas ranging from digital
                marketing and platforms for web conferencing, to applications for the maintenance of mental
                health. We also have experience in website development which corresponds all the modern trends
                and innovations in web technologies.',
            ],
        ],
        [
            'title' => 'What Is Included?',
            'image' => asset('view/images/serviceLogoWeb2.webp'),
            'content' => [
                [
                    'design and development;',
                    'rich functionality and mobile-friendly interface;',
                    'introduction of new technologies and tools;',
                    'cross browser development;',
                    'performance and usability testing.',
                ]
            ]
        ],
        [
            'title' => 'What Should You Expect?',
            'image' => asset('view/images/serviceLogoWeb3.webp'),
            'content' => [
                'As a company that has vast experience in web development,
                Trembit has the capacity and experience to create, launch and support a website or
                application any complication and scalability. Build your product or web application
                using agile development process
                <br>
                Working with our web app development team offers the following advantages:',
                [
                    'detailed business analysis',
                    'expertise in a wide range of industries;',
                    'effective management structure;',
                    'a convenient library of existing code components;',
                    'quick and cost-effective development cycle;',
                ]
            ],
        ],
    ]"></x-service-item-section>
@endsection
