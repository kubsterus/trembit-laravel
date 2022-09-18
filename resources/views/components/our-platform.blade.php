@props([
    'title' => 'Our platform',
    'items' => [
        [
            'picture' => [
                'src' => asset('view/images/photo5373105573534479696.jpg'),
                'alt' => 'Vatra',
                'srcset' => [
                    [
                        'link' => asset('view/images/photo5373105573534479696.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'pictureLogo' => [
                'src' => asset('view/images/vatra_logo.png'),
                'alt' => 'vatra logo',
                'srcset' => [
                    [
                        'link' => asset('view/images/vatra_logo.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'White Label Janus-based video conferencing software.',
            'link' => [
                'href' => 'vatra.html',
                'label' => 'View platform details'
            ],
            'description' => '
                <ul class="last" style=" font: normal normal normal 13px/20px Lato;">
                    <li>Up to 30 participants</li>
                    <li>Cross-platform</li>
                    <li>Web-application</li>
                    <li>Android</li>
                    <li>IOS</li>
                    <li>Mobile SDK</li>
                </ul>
                <h3>Included features for seamless webinars and video conferences experience:</h3>
                <ul style=" font: normal normal normal 13px/20px Lato;">
                    <li>Fully customizable video conferencing solution</li>
                    <li>Availability to manage 30 participants in one video-call</li>
                    <li>Files and documents sharing during the video-call</li>
                    <li>File storage for shared items that could be downloaded after the chat is over</li>
                    <li>Screensharing with the possibility to share either your full screen or the specific tab/window on your device</li>
                    <li>Video call records that could be stored and watched or downloaded afterward</li>
                    <li>Hand raise/Polls Artificial Intelligence (AI)</li>
                    <li>Meeting analyses done by AI: emotions, forbidden gestures, and many more!</li>
                </ul>
            ',
        ],
        [
            'picture' => [
                'src' => asset('view/images/photo5373105573534479695.jpg'),
                'alt' => 'Stusan',
                'srcset' => [
                    [
                        'link' => asset('view/images/photo5373105573534479695.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'pictureLogo' => [
                'src' => asset('view/images/Stusanlogo.svg'),
                'alt' => 'Stusan logo',
                'srcset' => [
                    
                ],
            ],
            'title' => 'White Label WebRTC based video conferencing software',
            'link' => [
                'href' => 'stusan.html',
                'label' => 'View platform details'
            ],
            'description' => '
                <ul class="last" style=" font: normal normal normal 13px/20px Lato;">
                    <li>Up to 6 participants.</li>
                    <li>Peer-to-Peer video-chat secured connection.</li>
                    <li>Direct communication using the pure WebRTC.</li>
                    <li>End-to-end encryption (E2EE)</li>
                </ul>
                <h3>Included features:</h3>
                <ul style=" font: normal normal normal 13px/20px Lato;">
                    <li>Video conferencing</li>
                    <li>File sharing during the video call</li>
                    <li>File and document storage. All the shared items could be downloaded after the video call</li>
                    <li>Screen sharing of a full screen or the specific tab/window on the device</li>
                    <li>Video call recording</li>
                    <li>Calls schedule</li>
                    <li>Hand raise/Polls possibility</li>
                    <li>Artificial Intelligence (AI) video meeting analyses</li>
                    <li>Forbidden gestures scanning, face and background blurring, custom backgrounds</li>
                </ul>
            ',
        ],
        [
            'picture' => [
                'src' => asset('view/images/photo5373105573534479694.jpg'),
                'alt' => 'Stream to',
                'srcset' => [
                    [
                        'link' => asset('view/images/photo5373105573534479694.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'pictureLogo' => [
                'src' => asset('view/images/StreamLOGO.svg'),
                'alt' => 'StreamLOGO',
                'srcset' => [
                    
                ],
            ],
            'title' => '',
            'link' => [
                'href' => 'portfolio.html',
                'label' => 'View platform details'
            ],
            'description' => '
                <p><strong>Telemedicine</strong> is online doctor visits via secure video connection. </p>
                            <p>TThe COVID-19 situation enforced numbers of private clinics to review their way of treating their patients. The telehealth platform we have created for them holds a wide range of features, which are specific for the Healthcare industry. The top priority in such a project is data security, such as HIPAA, GDPR, or KVB compliance, which we reach with the WebRTC technology and peer-to-peer connection. Features such as E-prescriptions, y in such a project is data security, such as HIPAA, GDPR, or KVB compliance, which we reach with the WebRTC technology and peer-to-peer connection. Features such as E-prescriptions, meeting calendar, and whiteboards are the ones which differentiate telemedicine from the regular videoconferencing solutions. Doctors can manage patients, meeting hours, along with the files, prescriptions, and notes, attached to the specific patient and &ldquo;doctor visit meeting&rdquo;.</p>
                            <p>WebRTC, Angular, NodeJS, Postgres</p>
            ',
        ],
        
    ],
])
<section id="our-platform" style="position: relative;background-color: rgb(28 30 46);padding-top: 0px;padding-bottom: 0px;min-height: auto;">
    <div class="flex">
        <div class="bl-3w">
            <div class="bl-7w mob" style="position: relative;">
                <h3 class="title-case-2">{{$title}}</h3>
                @foreach ($items as $key => $item)
                    
                <div class="block-in2-s  block-in2-{{$key}} {{!$key ? 'active' : ''}}" style="display: flex;">
                    <picture>
                        @foreach ($item['pictureLogo']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['pictureLogo']['alt'] }}" src="{{ $item['pictureLogo']['src'] }}" style="width: 100%;max-width: 300px;margin: auto;padding-bottom: 2.1em;"></source>
                    </picture>
                    <picture>
                        @foreach ($item['picture']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}" style="width: 100%;"></source>
                    </picture>
                </div>
                @endforeach
            </div>
            <div class="case-bl case-bl-1 show">
                <h3 class="title-case-2">{{$title}}</h3>
                @foreach ($items as $key => $item)
                    
                <div class="flex block-in2-s block-in2-{{$key}} {{!$key ? 'active' : ''}}">
                    <picture>
                        @foreach ($item['pictureLogo']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['pictureLogo']['alt'] }}" src="{{ $item['pictureLogo']['src'] }}" style="width: 100%;max-width: 300px;"></source>
                    </picture>
                    @if (@$item['title'])
                        <h2 style="color: #0390d4; text-align: left;">{{$item['title']}}</h2>
                    @endif
                    {!! $item['description'] !!}
                    <div class="red-b vatra-button"><a href="{{$item['link']['href']}}" class="">{{$item['link']['label']}}</a></div>
                </div>

                @endforeach
            </div>

        </div>
        <div class="bl-7w desctop" style="position: relative;">
            @foreach ($items as $key => $item)
                
            <div class="desktop block-in2-s  block-in2-{{$key}} {{!$key ? 'active' : ''}}" style="display: flex;">
                <picture>
                    @foreach ($item['picture']['srcset'] as $set)
                        <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                    @endforeach
                    <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}" style="width: 100%;"></source>
                </picture>

            </div>

            @endforeach
            <div class="flex">
                @foreach ($items as $key => $item)
                    
                <div class="block-2c block-in2 block-n2-{{$key}} {{!$key ? 'active' : ''}}">
                    <div class="bag-cs"></div>
                    <picture>
                        @foreach ($item['pictureLogo']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['pictureLogo']['alt'] }}" src="{{ $item['pictureLogo']['src'] }}" style="width: 25%;position: absolute;top: 7%;left: 6%;"></source>
                    </picture>
                    <picture>
                        @foreach ($item['picture']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}" style="width: 100%;"></source>
                    </picture>

                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
@inlineCss(css/sections/our-platform.css)
