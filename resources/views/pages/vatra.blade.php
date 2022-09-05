@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/stusan.css)
@endsection
@section('content')
    <x-solutionprovide-section title="White Label Janus-based video conferencing software."
                               :logo="asset('view/images/LOGOVatra.webp')"
                               :logo_big="asset('view/images/Vatra_BIG2x.webp')"
                               :list="[
                                    'Up to 30 participants',
                                    'Cross-platform',
                                    'Web-application',
                                    'Android',
                                    'IOS',
                                    'Mobile SDK',
                               ]"
                               :btn="[
                                    'link' => '/contacts.html',
                                    'text' => 'Get in touch'
                               ]"
    ></x-solutionprovide-section>
    <x-project-overview-section left_title="Included features for seamless webinars and video conferences experience:"
                                :left_list="[
            'Fully customizable video conferencing solution',
            'Availability to manage 30 participants in one video-call',
            'Files and documents sharing during the video-call',
            'File storage for shared items that could be downloaded after the chat is over',
            'Screensharing with the possibility to share either your full screen or the specific tab/window on your device',
            'Video call records that could be stored and watched or downloaded afterward',
            'Hand raise/Polls Artificial Intelligence (AI)',
            'Meeting analyses done by AI: emotions, forbidden gestures, and many more!',
        ]"
                                right_title="Delivery package:"
                                :right_list="[
            'Custom platform branding, domain name to the logos, colors, emails',
            'UI/UX edit Integration',
            'Server deployment',
            'Source code Intellectual property',
        ]"
    ></x-project-overview-section>
    <x-slider-section title="FEATURED CASE STUDIES">
        <x-slot name="top_content">
            <h2>THE NICHES STUSAN IS MOST SUITABLE FOR</h2>
            <div class="wrapper flex">
                <div class="block-3c">
                    <img src="view/images/medicine.svg" alt="Telemedicine">
                    <h4>Telemedicine</h4>
                    <p>Vatra is a perfect variant for group online therapy, support groups, webinars for therapists etc. It is secure and meets GDPR and HIPPA requirements.</p>
                </div>
                <div class="block-3c">
                    <img src="view/images/meetinng_seqiurity.svg" alt="Corporate secure">
                    <h4>Corporate secure meetings</h4>
                    <p>Vatra is designed for businesses and corporations that wish to have their own hosted solution for conducting video meetings for their employees and remote teams.</p>
                </div>
                <div class="block-3c">
                    <img src="view/images/one_to_one.svg" alt="One to one calls">
                    <h4>Webinars and online education</h4>
                    <p>As the solution works perfectly well for up to 30 attendees it is a great choice for virtual education and webinars with screen and docs sharing, recording and storage.</p>
                </div>
            </div>
        </x-slot>
    </x-slider-section>
    <x-faq-section :items="[
        [
            'question' => 'What does Vatra - video conferencing software do?',
            'answer' => 'Vatra is a cross-platform video streaming solution for up to 30 attendees. It allows to organize video conferences and is fully customizable for business needs. Vatra is a perfect fit for virtual group therapy, corporate meetings for remote teams, webinars, and online education.'
        ],
        [
            'question' => 'What does White Label video conferencing software mean?',
            'answer' => 'White Label means that Vatra software could be rebranded for clients&rsquo; needs including domain name, logos, colors, emails, UI/UX design. It is deployed on a Janus server for your convenience and smooth video streaming.'
        ],
        [
            'question' => 'What are the benefits of Janus-based solutions?',
            'answer' => 'Janus is a WebRTC Server that makes real-time communication over the web more secure and reliable. The main benefits are perfect ease of implementation and a high level of security of WebRTC technology.'
        ],
    ]"></x-faq-section>
    <x-lets-us-section></x-lets-us-section>

@endsection
