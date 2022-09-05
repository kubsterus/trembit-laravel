@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/software-development.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>Software development kit</h1>
            <p>Trembit provides every piece of blocks that you need to develop a WebRTC video call experience in your web or mobile application.Janus APIs deliver a cross-platform solution in a lightweight SDK. Use our iOS, Android, and JavaScript SDKs&mdash;and easily connect PSTN and IP voice communications throughout group calls, as well as peer-to-peer conversations.</p>
            <img class="img-dk" src="view/images/services/Software_development_kit/Center_settings.svg" alt="Software development kit">
        </x-slot>
    </x-title-section>
    <x-services-section title="Create and manage outstanding <br> live video events" :items="[
        [
            'title' => 'Video call',
            'image' => 'view/images/icon/Software_development_kit_1.1.svg',
            'shadow_image' => 'view/images/icon/shadow_purple.webp',
            'list' => [
                'Peer-to-peer communication',
                'One-to-many communication',
                'Many-to-many communication',
                'Video on demand functionality',
                'Video stream customization',
                'Screenshare',
                'Custom layouts',
                'Backgrounds',
                'Blurring',
                'Video stream customization',
            ]
        ],
        [
            'title' => 'Additional features',
            'image' => 'view/images/icon/Software_development_kit_1.2.svg',
            'shadow_image' => 'view/images/icon/shadow_orange.webp',
            'list' => [
                'SIP interconnect/VOIP connection',
                'Video chat',
                'Chat customization',
                'Recording',
                'Audio detection',
                'WEB/Mobile SDK coverage',
            ]
        ],
        [
            'title' => 'Security',
            'image' => 'view/images/icon/Software_development_kit_1.3.svg',
            'shadow_image' => 'view/images/icon/shadow_light_blue.webp',
            'list' => [
                'GDPR compliant',
                'KBV compliant',
                'Regional media zones',
                'Firewall traversal',
                'Advanced firewall control',
                'Data analytics',
            ]
        ],
    ]">

    </x-services-section>
    <x-service-features-section :left="[
        [
            'title' => 'Video call',
            'text' => 'The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?'
        ],
    ]"

    :right="[
        [
            'title' => 'Additional features',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ],
        [
            'title' => 'Security',
            'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
        ]
    ]"
    >
        <x-slot name="title">SDK</x-slot>
        <x-slot name="description">
            The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES" ></x-slider-section>
    <x-lets-us-section></x-lets-us-section>
@endsection
