@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/ui-ux.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>UX/UI</h1>
            <p>Design an engaging product that is easy-to-use, attractive and functional</p>
            <picture><source srcset="view/images/services/UXUI/1LINE.webp" type="image/webp"><img class="img-web1" src="view/images/services/UXUI/1LINE.png" alt="line android"></source></picture>
            <picture><source srcset="view/images/services/UXUI/2LINE.webp" type="image/webp"><img class="img-web2" src="view/images/services/UXUI/2LINE.png" alt="line iPhone"></source></picture>
        </x-slot>
    </x-title-section>
    <x-services-section title="Design service" :items="[
        [
            'title' => 'Discovery stage',
            'image' => asset('view/images/icon/Design_servise_1.1.svg'),
            'shadow_image' => asset('view/images/icon/shadow_light_blue.webp'),
            'list' => [
                'Project Vision Document',
                'Mind diagrams (user flows, business flows, list of solution options, etc.)',
                'Mitigate all future risks Plan the development',
                'Ensure project flexibility Share your idea',
                'Optimize development costs',
                'Discover the unknowns Eliminate uncertainty',
            ]
        ],
        [
            'title' => 'Research and Ideation',
            'image' => asset('view/images/icon/Design_servise_1.2.svg'),
            'shadow_image' => asset('view/images/icon/shadow_blue.webp'),
            'list' => [
                'Competitor analysis',
                'User interviews Prioritization',
                'Customer journey',
                'Value proposition',
                'Affinity sorting',
                'Workflow',
                'User Story Mapping',
            ]
        ],
        [
            'title' => 'Wireframes and Design',
            'image' => asset('view/images/icon/Design_servise_1.3.svg'),
            'shadow_image' => asset('view/images/icon/shadow_purple.webp'),
            'list' => [
                'Sketching',
                'Ideation workshops',
                'Prototyping',
                'Usability testing',
                'Design concept',
                'Interface animation',
            ]
        ],
    ]
    "></x-services-section>
    <x-service-features-section :left="[
        [
            'title' => 'Discovery stage',
            'text' => 'The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?'
        ],
        [
            'title' => 'User Experience',
            'text' => 'UI/UX design is a defining factor for any digital product these days. Our UI/UX design capabilities are covering more fields than just mobile apps, web applications, or multi&#8209;platform digital experiences-we create products and services that provide outstanding usability while fully embracing your brand\'s personality. You will get all designer documentation, wireframes and UX roadmap that will help you to get a full picture of how your solution will look and how its elements will work.'
        ]
    ]"
    :right="[
        [
            'title' => 'Digital Strategy',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ],
        [
            'title' => 'Development',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ],
        [
            'title' => 'Design',
            'text' => 'We create next-level websites by strategically blending user experience and brand storytelling. Our web designers and developers create responsive websites that feel at home on any device. Product landing pages, marketing sites, or UX UI for company intranet portals &ndash; we do it all.'
        ]
    ]">
        <x-slot name="title">
            UX/UI
        </x-slot>
        <x-slot name="description">
            The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES"></x-slider-section>
	<x-lets-us-section></x-lets-us-section>

@endsection
