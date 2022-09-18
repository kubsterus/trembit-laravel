@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/stusan.css)
@endsection
@section('content')
    <x-solutionprovide-section title="White Label WebRTC based video conferencing software"
                               :logo="asset('view/images/LogoStusan.webp')"
                               :logo_big="asset('view/images/Stusan_BIG@2x.webp')"
                               :list="[
                                    'Up to 6 participants.',
                                    'Peer-to-Peer video-chat secured connection.',
                                    'Direct communication using the pure WebRTC.',
                                    'End-to-end encryption (E2EE)'
                               ]"
                               :btn="[
                                    'link' => '/contacts.html',
                                    'text' => 'Get in touch'
                               ]"
    ></x-solutionprovide-section>
    <x-project-overview-section left_title="Included features:"
        :left_list="[
            'Video conferencing',
            'File sharing during the video call',
            'File and document storage. All the shared items could be downloaded after the video call',
            'Screen sharing of a full screen or the specific tab/window on the device',
            'Video call recording',
            'Calls schedule',
            'Hand raise/Polls possibility',
            'Artificial Intelligence (AI) video meeting analyses',
            'Forbidden gestures scanning, face and background blurring, custom backgrounds',
        ]"
        right_title="Delivery package:"
        :right_list="[
            'Video conferencing platform',
            'Custom branding, UI/UX edit Integration',
            'Server deployment',
            'Source code',
            'Intellectual property',
        ]"
    ></x-project-overview-section>
	<x-slider-section title="FEATURED CASE STUDIES">
        <x-slot name="top_content">
            <h2>THE NICHES STUSAN IS MOST SUITABLE FOR</h2>
            <div class="wrapper flex">
                <div class="block-3c">
                    <img src="{{asset('view/images/medicine.svg')}}" alt="Telemedicine" title="Telemedicine">
                    <h4>Telemedicine</h4>
                    <p>White-label solution based on WebRTC allows to create custom branded solutions for 1 to1 or small groups online therapy. It could be easily integrated to your existion telemedicine platforms. Stusan meets all HIPPA and GDPR requirements for such apps.</p>
                </div>
                <div class="block-3c">
                    <img src="{{asset('view/images/meetinng_seqiurity.svg')}}" alt="Corporate secure" title="Corporate secure">
                    <h4>Corporate secure meetings</h4>
                    <p>The WebRTC technology gives the top-tier data security letting you establish the p2p connection between the users, which means that no data is being transferred or stored in external servers that is a perfect fit for corporate video calls.</p>
                </div>
                <div class="block-3c">
                    <img src="{{asset('view/images/one_to_one.svg')}}" alt="One to one calls" title="One to one calls">
                    <h4>One to one calls</h4>
                    <p>Stusan is suitable for integration to platforms where one to one calls are provided for ex. Dating apps, business meetings, personal education. It provides a reliable and secure video connection.</p>
                </div>

            </div>
        </x-slot>
    </x-slider-section>
    <x-faq-section :items="[
        [
            'question' => 'What is peer-to-peer connection?',
            'answer' => 'In peer-to-peer (P2P) connection, a group of computers are linked together with equal permissions and responsibilities for processing data that is not going through a separate server computer. No data is stored and sended to some external servers or starages that is why this network is more appropriate for sensitive corporate data.'
        ],
        [
            'question' => 'What does video conferencing do?',
            'answer' => 'Video conferencing is a technology that permits users from distance locations to hold face-to-face meetings. It works las a video streaming connection between several devices like desktop ones, smartphones and tablets. It is used for remote business communication, job interviews, telemedicine and online therapy, business deals, etc. The list of specific features created for video conferencing convenience include screen sharing, file and document sharing, meetings scheduling and notifications, video recordings and many more.'
        ],
        [
            'question' => 'Is WebRTC secure?',
            'answer' => 'WebRTC was designed to create real-time connections containing audio and video streams as well as data channels. WebRTC is implemented to provide a complete, configurable, and easy-to-use peer-to-peer connections with top level of data security.  In Stusan solution no external servers were used for data storage.'
        ],
    ]"></x-faq-section>
    <x-lets-us-section></x-lets-us-section>

@endsection
