@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/qa.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>QA</h1>
            <p>The only way to ensure that high-quality, reliable software products are put into the market is through the accurate and flexible testing during and after the development of each feature of the specific product. Our QA team will ensure the delivery of the stable, competitive and reliable product to the end user.</p>
        </x-slot>
        <x-slot name="underTitle">
            <img class="img-qa" src="view/images/services/QA/QACENTER.svg" alt="qa">
            <span>Level of Quality</span>
        </x-slot>
    </x-title-section>
    <x-services-section title="Full scale QA services" :items="[
        [
            'title' => 'Manual quality assurance services',
            'image' => asset('view/images/icon/QA_1.1.svg'),
            'shadow_image' => asset('view/images/icon/shadow_orange.webp'),
            'list' => [
                'Functional Testing',
                'Usability testing',
                'Performance testing',
                'Configuration testing',
                'Security testing',
                'Cause/effect analysis',
                'Bottleneck/issue assumption',
            ]
        ],
        [
            'title' => 'Automation Quality Assurance services',
            'image' => asset('view/images/icon/QA_1.2.svg'),
            'shadow_image' => asset('view/images/icon/shadow_blue.webp'),
            'list' => [
                'API testing',
                'Integration testing',
                'System testing',
                'Acceptance testing',
            ]
        ],
        [
            'title' => 'QA consulting services',
            'image' => asset('view/images/icon/QA_1.3.svg'),
            'shadow_image' => asset('view/images/icon/shadow_purple.webp'),
            'list' => [
                'Design review',
                'Load &amp; Performance',
                'Environment analyzing',
                'Requirements testing',
                'Defect analyzing',
            ]
        ],
    ]
    "></x-services-section>
    <x-service-features-section :left="[
        [
            'title' => 'Automation',
            'text' => 'The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?'
        ],
    ]"
    :right="[
        [
            'title' => 'Manual',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ],
        [
            'title' => 'QA consulting Services',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ],
    ]">
        <x-slot name="title">
            QA
        </x-slot>
        <x-slot name="description">
            The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES"></x-slider-section>
    <x-lets-us-section></x-lets-us-section>

@endsection
