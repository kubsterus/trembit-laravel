@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/portfolio.css)
@endsection
@section('content')
    <x-portfolio-item>
        <x-slot name="content">
            <h2>Support Messaging Platform</h2>
            <p><strong>Specially designed online tool for providing support for the retail industry participants who need a conversation with the professional before purchasing the product, and receive feedback after it, having a full cycle support</strong></p>
            <p><strong>Industry:</strong> Retail</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>Server: Nest JS</li>
                <li>DB: Mongo</li>
                <li>GCP React</li>
                <li>Docker Mailgun</li>
                <li>Bandwidth</li>
                <li>Firebase</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="2">
        <x-slot name="content">
            <h2 style="color:#FFC749;">Real-time <br />tour guide</h2>
            <p style="width: 53%;"><strong>
                    Nordiva is a real-time streaming platform for the in-door traveling experience. Viewers can access the web version in order to watch the real-time tour and chat with the tour guide. Tour guides can stream through the mobile phone and chat with the viewers, as well as share their location and provide the e-commerce features, such as local shops support and souvenirs trading, etc.
                </strong></p>
            <p><strong>Industry:</strong> Traveling + e-commerce.</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>Agora.io video streaming service</li>
                <li>Angular for browser version</li>
                <li>NodeJS for streaming back-end.</li>
                <li>React native/ IOS for mobile platform</li>
                <li>Firebase for syncing video playback and chat</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="3">
        <x-slot name="content">
            <h2 style="color:#FFFFFF;">Healthy diet app</h2>
            <p style="width: 53%;"><strong>
                    Dine Nation - is an app for modern users who wish to stay healthy in this overwhelmed society. It adjusts the daily menu according to the client’s personal preferences, such as age, weight, gender, lifestyle and so on. Creates a unique menu that aligns with customers’ needs - whether the weight loss or mass gain, The Dine Nation app automatically calculates the necessary protein carbs- fats ratio specifically for each person. It is also possible to manually select the different types of food in each part of your daily eating session. The delivery and food plans are also included.
                </strong>
            </p>
            <p><strong>Industry:</strong> Healthy food</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>NodeJS, Firebase, Postgresql, React+React native </li>
                <li>Firebase</li>
                <li>Postgresql</li>
                <li>React+React native </li>
                <li>IOS/Android (swift/kotlin).</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="4">
        <x-slot name="content">
            <h2 style="color:#18A7F8;">Video post-editing<br />	solution</h2>
            <p><strong>
                    VTT editor - is a comprehensive tool to work with subtitles.<br />
                    It allows uploading a video and converting audio speech to text translation, using AI. There is also a possibility to edit VTT: fix the text, assign speakers, change the duration of each line in subtitles to fit the speaker and, of course, add chapters.<br />
                    VTT editor is all-in-one tool that covers everything you need, to work with CC.
                </strong></p>
            <p><strong>Industry:</strong>Video post editing</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>NodeJS, Firebase, Postgresql </li>
                <li>Firebase</li>
                <li>Postgresql </li>
                <li>React</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="5">
        <x-slot name="content">
            <h2 style="color:#FAF627;">Online dating app</h2>
            <p><strong>
                    DateNight is a geosocial online dating and messaging mobile application. It allows users to meet in virtual private “date” rooms, communicate using video and audio, and like or dislike each other after the “date”. Oadmin UI to manage games and users, server layer for
                    iOS mobile app.
                </strong></p>
            <p><strong>Industry:</strong> Dating</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>SMS service integration</li>
                <li>Google Firebase</li>
                <li>Cassandra</li>
                <li>Postgress</li>
                <li>Redis</li>
                <li>TokBox</li>
                <li>AWS S3</li>
                <li>AWS CloudFront</li>
                <li>AWS Lambda</li>
                <li>AWS SNS</li>
                <li>Node Js</li>
                <li>SMS service integration</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="6">
        <x-slot name="content">
            <h2 style="color:#213045;">Trading streaming platform</h2>
            <p><strong>Bullpit is a trading streaming twitch-like platform, focused on the strong investor community, combined with the Wallstreetbets and other public sources. In order to share users’ experience and ideas regarding the investments, it allows streaming the real-time stock market activity.</strong></p>
            <p><strong>Industry:</strong> Stock market trading</p>
            <p>Technology used:</p>
            <ul>
                <li>Millicast server</li>
                <li>Angular/Node.JS</li>
                <li>Django</li>
                <li>Firebase</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="7">
        <x-slot name="content">
            <h2 style="color:#006AE1;">Video conferencing platform</h2>
            <p style="width: 63%;"><strong>
                    ideo conference solution for a government agency with the support of displaying the IP cameras streams inside it. The specific feature is immediate sharing of IP cameras displays during the conference or peer2peer communication.
                </strong></p>
            <p><strong>Industry:</strong> Government</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>
                    NodeJS
                </li>
                <li>Angular</li>
                <li>Postgres</li>
                <li>Janus media server</li>
                <li>Jibri</li>
                <li>Real-time DB</li>
                <li>Prometric</li>
                <li>Graphana</li>
                <li>Elastic searchin</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="8">
        <x-slot name="content">
            <h2 style="color: #B12FC5;">Virtual conferencing solution for event agency</h2>
            <p><strong>
                    Koyag is an existing solution that provides a white-label service to manage high-complexity business meetings. Due to the Covid-19 contingency, the company focuses now on virtual (remote) business events. Trembit created a global update for the existing solution to improve productivity, added features for events up to 50 attendees, updated the design scheme, and improve UI/UX.</strong></p>
            <p><strong>Industry:</strong> Online events</p>
            <p>Technology used:</p>
            <ul>
                <li>Jibri/Wowza streaming stack</li>
                <li>Tokbox</li>
                <li>AWS</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="9">
        <x-slot name="content">
            <h2 style="color:#FFFFFF;">Webinar platform	</h2>
            <p><strong>The solution was created from scratch for online education. It works like a webinar platform with a list of specific features like subtitles creation, screen sharing, speech-to-text conversion, and many more.</strong></p>
            <p><strong>Industry:</strong> Online education</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>NodeJS</li>
                <li>NestJS framework</li>
                <li>Firebase</li>
                <li>JitsiMeet server</li>
                <li>AWS </li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="10">
        <x-slot name="content">
            <h2 style="color: #13c4cd;">Online event platform</h2>
            <p><strong>
                    Bemyapp goal is to apply custom design for the online video platform, and implement a video player as well as customize the Jitsimeet? So that the users could manage video files along with conducting a video conference.
                </strong></p>
            <p><strong>Industry:</strong> Online events</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>
                    NodeJS app (NestJS framework) for video scheduling API and files upload
                </li>
                <li>Firebase for syncing video playback</li>
                <li>JitsiMeet server and frontend</li>
                <li>AWS</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="11">
        <x-slot name="content">
            <h2 style="color: #213045;">Online platform for musicians</h2>
            <p><strong>Sirius is a unique cutting edge technology tool, combining opportunities for long-distance music teaching and studying music enthusiastic users all over the world. The product is GDPR compliant and is now successfully used by over 8k teachers.</strong></p>
            <p><strong>Industry:</strong> Music education</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>Backend: Node.js (Fastify)gtfrs2</li>
                <li>Frontend: Angular</li>
                <li>Technology: EasyRTC for video streaming</li>
                <li>3d parties solutions only German based Hetzner hosting</li>
                <li>SendinBlue (e-mail service)</li>
                <li>Devops:</li>
                <li>Jenkins, Docker, Kibana, Graphana, Traefik</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="12">
        <x-slot name="content">
            <h2 style="color:#ffffff;">P2P platform for psychotherapy online</h2>
            <p><strong>«WebPRAX Face2Face» is the first online therapy platform specially designed for the psychotherapists, that was certified by KVB for video conferencing</strong></p>
            <p><strong>The project goal is to create a service providing a video chat between doctor and patient.</strong></p>
            <p><strong>Industry:</strong> Telemedicine</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>Backend: Node.js </li>
                <li>Frontend: Angular</li>
                <li>Websocket</li>
                <li>WebRTC</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
    <x-portfolio-item index="13">
        <x-slot name="content">
            <h2 style="color: #7252a5;">Stusan</h2>
            <p><strong>
                    Stusan - a P2P video platform for group communications in telemedicine. It’s list of features and UX design created specifically for healthcare, such as: E-prescriptions, meeting calendars, and whiteboards.<br />
                    Stusan is HIPAA, GDPR, and KVB compliant.
                </strong></p>
            <p><strong>Industry:</strong> Telemedicine</p>
            <p><strong>Technology used:</strong></p>
            <ul>
                <li>Backend: Node.js (Fastify)gtfrs2</li>
                <li>Frontend: Angular</li>
                <li>Technology: EasyRTC for video </li>
                <li>streaming</li>
                <li>GDPR compliant:</li>
                <li>3d parties solutions only German</li>
                <li>based</li>
                <li>Hetzner hosting</li>
                <li>SendinBlue (e-mail service)</li>
                <li>Devops:</li>
                <li>Jenkins, Docker, Kibana, Graphana,</li>
                <li>Traefik</li>
            </ul>
        </x-slot>
    </x-portfolio-item>
	<x-lets-us-section></x-lets-us-section>

@endsection
