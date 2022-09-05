@extends('skeleton')

@section('critical_styles')

@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>Our Work</h1>
            <p>We help businesses to better serve their customers</p>
        </x-slot>
    </x-title-section>
    @php
        $work_items = [
        [
            'title' => 'Telemedicine',
            'short_description' => 'is online doctor visits via secure video connection.',
            'description' => 'The COVID-19 situation enforced numbers of private clinics to review their way of treating their patients.
                        The telehealth platform we have created for them holds a wide range of features, which are specific for the Healthcare industry.
                        The top priority in such a project is data security, such as HIPAA, GDPR, or KBV compliance,
                        which we reach with the WebRTC technology and peer-to-peer connection. Features such as E-prescriptions, meeting calendar,
                        and whiteboards are the ones which differentiate telemedicine from the regular videoconferencing solutions.
                        Doctors can manage patients, meeting hours, along with the files, prescriptions, and notes,
                        attached to the specific patient and "doctor visit meeting".',
            'highlight' => '',
            'image' => asset('view/images/telemedicine.webp'),
            'tags' => 'WebRTC, Angular, NodeJS, Postgres'
        ],
        [
            'title' => 'Shindig',
            'short_description' => 'is a complete solution for online video chat events.',
            'description' => 'Its unique technology offers the dynamics of an in-person event at internet scale.
                        Shindig enables a host to give a video conference, lecture, seminar, interview or media event in front of an online audience of thousands.
                        Hosts can share the stage for face-to-face interactions with audience members before the entire gathering or sidebar with participants privately.',
            'highlight' => [
                'title' => 'Shindig',
                'link' => 'https://shindig.com/'
            ],
            'image' => asset('view/images/shindig2x.webp'),
            'tags' => 'Adobe FMS, WebRTC, JS'
        ],
        [
            'title' => 'Learnster',
            'short_description' => 'is a next generation learning platform.',
            'description' => 'With mixed learning, combining online and classroom education, you can do everything in one place.
                        All the way from designing a course to distributing, managing, delivering and progress tracking.
                        We are delighted to be a development team for learnster project, and without further ado, invite you to check it out!',
            'highlight' => [
                'title' => 'Learnster',
                'link' => 'https://learnster.se/'
            ],
            'image' => asset('view/images/learnster.webp'),
            'tags' => 'Python 3.6, PostgreSQL, Angular 7, Docker, AWS ECS/Lambda/SNS/MediaConvert'
        ],
        [
            'title' => 'Digital Samba',
            'short_description' => 'is a specialises in the conceptualisation and realisation of Intranet, Extranet and Internet communication and collaboration solutions.',
            'description' => 'Whether you need to run a webinar with over 1500 users, host online classroom to reach students,
                        conduct a business meeting or you need a software under white label, Digital Samba is here to help.',
            'highlight' => [
                'title' => 'Digital Samba',
                'link' => 'https://www.digitalsamba.com/'
            ],
            'image' => asset('view/images/samba.webp'),
            'tags' => 'Kurento, WebRTC, JS'
        ],
        [
            'title' => 'Cogmed Working Memory Training&reg;',
            'subtitle' => 'Cogmed',
            'short_description' => 'is a computer-based solution for attention problems caused by poor working memory.',
            'description' => 'We combine cognitive neuroscience with innovative computer game design and
                        close professional support to deliver substantial and lasting benefits to our users.
                        Our solutions include easy-to-use software and personal support. ',
            'highlight' => [
                'title' => 'Cogmed Working Memory Training&reg;',
                'link' => 'https://www.cogmed.com/'
            ],
            'image' => asset('view/images/cogmed.webp'),
            'tags' => 'Adobe Flex, Adobe AIR, Starling, Python'
        ],
        [
            'title' => 'Pipelinemanager',
            'subtitle' => 'Pipeline Manager',
            'short_description' => 'is a CRM app for salesforce users.',
            'description' => 'This is CRM for great leaders who need to set a clear course.
                        Pipeline Manager forecasts are NOT a time-consuming (sales-time-wasting)
                        weekly activity. Our clients use our spreadsheet to update
                        10 opportunities in less than a minute. More time for selling.
                        Adoption is a no-brainer. Users are guided (not playbook-forced)
                        to ask the key questions about what the customer wants.',
            'highlight' => [
                'title' => 'PipelineManager',
                'link' => 'http://www.pipelinemanager.com/'
            ],
            'image' => asset('view/images/pipelinesmall.webp'),
            'tags' => 'Adobe Flex, Salesforce'
        ]
    ];
    @endphp
    <x-works-section :items="$work_items"/>
@endsection
