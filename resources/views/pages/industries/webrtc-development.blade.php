@extends('skeleton')

@section('critical_styles')
    {{--	@inlineCss(css/industries.telemedicine-app-development.css)--}}
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>WebRTC Development</h1>
            <p>Work together with our video streaming development team of experts</p>
            <a href="/contacts.html"><div id="titleButton" class="red-b"><span class="but-as">Get in touch</span></div></a>
        </x-slot>
    </x-title-section>
    <x-industry-overview-section title="WebRTC Development Solutions We Provide" :image="asset('view/images/industries/all_screens_2.webp')"
                                 :items="
            [
                [
                    'title' => 'Video Chat',
                    'text' => 'Messengers Extensive experience in the WebRTC mobile app development and a high level of competence allows us to create products that fully meet the needs of our customers. Our applications combine outstanding performance and scalability. They have a rich set of tools, the ability to create group chats, and also allow you to share multimedia and files very quickly and securely, which will simplify communication and increase the productivity of your team.',
                    'icon' => asset('view/images/industries/video-call.webp'),
                ],
                [
                    'title' => 'Video Conferencing Platforms',
                    'text' => 'Take the custom video conferencing software solution your business needs to the next level with our help.The technology of our WebRTC development company will allow you to make both one-on-one video calls and connect an unlimited number of participants without compromising the quality and security of video communication. <br> Features such as real-time captioning, remote screen sharing, voting, whiteboard, and the ability to easily and quickly integrate with an electronic diary and calendar can be included if necessary. With access control and data encryption video calls are maximally protected and safe. Communication with customers, partners and employees around the world has never been as convenient as using WebRTC solutions!',
                    'icon' => asset('view/images/industries/videoconference.webp'),
                ],
                [
                    'title' => 'WebRTC Streaming Solutions',
                    'text' => 'To ensure interactive and high-quality live streams, our WebRTC development company uses advanced technical tools and cooperates with leading media servers. WebRTC is great for live streaming. Encryption and access control guarantee the security of the connection, which allows you to hold private events and conferences. <br> The WebRTC interface is very easy to use and viewers can access it by simply entering the secure live stream URL on any device. During the live stream, presenters can share their screens and communicate with their viewers using the comment section. The organizer retains full control over the video and audio streams of each participant, and can also record sessions for later watching or distribution. <br> WebRTC provides the high quality video and seamless performance required for live streaming of large-scale events. <br> Of course, you can get away with using conventional meeting tools such as Skype and Zoom. However, by using services of our WebRTC development company, you will receive a product that will be maximally customized to your needs using your corporate logo and design.',
                    'icon' => asset('view/images/industries/group1234.webp'),
                ],
                [
                    'title' => 'Telemedicine Video Communication',
                    'text' => 'To protect the confidential information of users, we use end-to-end encryption when transmitting and storing data in the cloud. <br> Useful features have made consultations even more efficient. Share your screen to show x-rays and photos. Change the camera and turn on the flashlight so that the doctor can better examine the parts of the body. Start a countdown so patients can see how much time is left until the end of the consultation. If one of the participants of the call is late, the second one can wait for the virtual waiting room.',
                    'icon' => asset('view/images/industries/medicine.webp'),
                ],
            ]
        "
    ></x-industry-overview-section>
    <x-services-we-provide title="The Advantages Of Webrtc"
                           :items="[
        [
            'picture' => asset('view/images/industries/group1234.webp'),
            'title' => 'No third party app needed',
            'content' => 'While most systems need software installation, WebRTC does not, which is very convenient and time saving.'
        ],
        [
            'picture' => asset('view/images/industries/network_1.webp'),
            'title' => 'High quality connection',
            'content' => 'State-of-the-art audio and video equipment with features such as echo and noise cancellation ensure excellent call quality. The smart technology adapts to your Internet connection and adjusts communication quality, so even if the connection is poor, you will still receive high-quality video and audio signals. Due to the automatic microphone sensitivity, the sound will be adjusted as accurately as possible so that the interlocutors can comfortably hear each other.'
        ],
        [
            'picture' => asset('view/images/industries/cyber-security.webp'),
            'title' => 'High level of security',
            'content' => 'By choosing this system, you can be completely sure of the security of your data. Encryption is mandatory for all WebRTC components. Since it is not a plugin, it runs inside the browser without creating a new process, so that no malware can enter the user\'s system.'
        ],
        [
            'picture' => asset('view/images/industries/speed.webp'),
            'title' => 'Speed Boost',
            'content' => 'No more routing through the server, which reduces latency and bandwidth consumption. Direct communication increases the speed of data transfer and file sharing.'
        ],
        [
            'picture' => asset('view/images/industries/puzzle.webp'),
            'title' => 'Compatibility',
            'content' => 'Popular browsers supported: Microsoft Edge, Google Chrome, Mozilla Firefox, Safari, Opera. Android, Chrome OS, Firefox OS, BlackBerry 10, iOS, Tizen are supported.'
        ],
    ]"></x-services-we-provide>
    <x-why-block title="Why Developing A Webrtc App With Us?" subtitle="Our WebRTC development company consists of first-class specialists with a wealth of experience and a track record of successful projects. We have already helped many clients in solving complex business problems, such as developing web applications and software for corporate needs. With high professional standards and passion for communication technology, you can be sure that if you hire WebRTC developers from Trembit, they will bring your vision to life and live up your trust."
                 :image="asset('view/images/industries/programming-code-with-laptop-background.webp')"
    ></x-why-block>
    <x-slider-section></x-slider-section>
    <x-feedback></x-feedback>
    <x-faq-section :items="[
        [
            'question' => 'What is WebRTC?',
            'answer' => 'WebRTC (Web Real Time Communications) is a smart network technology introduced by Google in 2011, which is used to transfer streaming audio and video data, as well as files of any format and text messages between browsers or other applications that support it in real time.'
        ],
        [
            'question' => 'What does WebRTC do?',
            'answer' => 'WebRTC app development technology allows you to turn your browser into a video conferencing terminal without the need to install plug-ins or other extensions. To start chatting, you just need to open the web page of the conference.'
        ],
        [
            'question' => 'Is WebRTC secure?',
            'answer' => 'One of the security risks in any real-time communication application can occur during data transmission. WebRTC application development does not use third-party services that could be used to implement data protection. However, the technology works through proven network protocols that apply to all components and ensure data transmission is secure.'
        ],
    ]"></x-faq-section>
    <x-lets-us-section></x-lets-us-section>

@endsection
