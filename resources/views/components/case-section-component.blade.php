@props([
    'casesLink' => 'portfolio.html',
    'cases' => [
        [
            'picture' => [
                'src' => asset('view/images/Messaging_Platform.png'),
                'alt' => 'Messaging Platform',
                'srcset' => [
                    [
                        'link' => asset('view/images/Messaging_Platform.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'color' => '#213045',
            'title' => 'Support Messaging Platform',
            'altTitle' => 'Messaging <br>Platform',
            'description' => '
                <p>Specially designed online tool for providing support for the retail industry participants who
                    need a conversation with the professional before purchasing the product, and receive feedback
                    after it, having a full cycle support</p>
                <p><strong>Industry:</strong> Retail</p>
                <p>Technology used:</p>
                <ul>
                    <li>Server: Nest JS</li>
                    <li>DB: Mongo</li>
                    <li>GCP React</li>
                    <li>Docker Mailgun</li>
                    <li>Bandwidth</li>
                    <li>Firebase</li>
                </ul>
            ',
        ],
        [
            'picture' => [
                'src' => asset('view/images/Bullpit.png'),
                'alt' => 'Bullpit',
                'srcset' => [
                    [
                        'link' => asset('view/images/Bullpit.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'color' => '#213045',
            'title' => 'Trading streaming platform',
            'altTitle' => 'Bullpit',
            'description' => '
                <p>Bullpit is a trading streaming twitch-like platform, focused on the strong investor community, combined with the Wallstreetbets and other public sources. In order to share users&rsquo; experience and ideas regarding the investments, it allows streaming the real-time stock market activity.</p>
                            <p><strong>Industry:</strong> Stock market trading</p>
                            <p>Technology used:</p>
                            <ul>
                                <li>Millicast server</li>
                                <li>Angular/Node.JS</li>
                                <li>Django</li>
                                <li>Firebase</li>
                            </ul>
            ',
        ],
        [
            'picture' => [
                'src' => asset('view/images/Day_and_Night.png'),
                'alt' => 'Day and Night',
                'srcset' => [
                    [
                        'link' => asset('view/images/Day_and_Night.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'color' => '#FAF627',
            'title' => 'Online dating app',
            'altTitle' => 'Online <br>dating app',
            'description' => '
                <p>
                                DateNight is a geosocial online dating and messaging mobile application. It allows users to meet in virtual private &ldquo;date&rdquo; rooms, communicate using video and audio, and like or dislike each other after the &ldquo;date&rdquo;. Oadmin UI to manage games and users, server layer for
                                iOS mobile app.

                            </p>
                            <p><strong>Industry:</strong> Dating</p>
                            <p>Technology used:</p>
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
            ',
        ],
        [
            'picture' => [
                'src' => asset('view/images/iRecords.png'),
                'alt' => 'iRecords',
                'srcset' => [
                    [
                        'link' => asset('view/images/iRecords.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'color' => '#213045',
            'title' => 'Video conferencing platform',
            'altTitle' => 'Video conferencing platform',
            'description' => '
                <p style="width: 63%;">
                                Video conference solution for a government agency with the support of displaying the IP cameras streams inside it. The specific feature is immediate sharing of IP cameras displays during the conference or peer2peer communication.

                            </p>
                            <p><strong>Industry:</strong> Government</p>
                            <p>Technology used:</p>
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
            ',
        ],
    ],
])
<section id="case" style="position: relative;background-color: #171717;padding-top: 0px;padding-bottom: 0px;min-height: auto;">
    <div class="flex">
        <div class="bl-7w">
            @foreach ($cases as $key => $case)
                <div class="flex block-in-s block-in-{{$key}} {{!$key ? 'active' : ''}}">
                    <picture>
                        @foreach ($case['picture']['srcset'] as $set)
                            <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                        @endforeach
                        <img alt="{{$case['picture']['alt']}}" src="{{$case['picture']['src']}}" style="width: 100%;"></source>
                    </picture>
                </div>
            @endforeach
            <div class="flex desktop">
                @foreach ($cases as $key => $case)
                    <div class="block-3c block-in block-n-{{$key}} {{!$key ? 'active' : ''}}">
                        <h3 class="title-cs">{{$case['title']}}</h3>
                        <picture>
                            @foreach ($case['picture']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$case['picture']['alt']}}" src="{{$case['picture']['src']}}" style="width: 100%;"></source>
                        </picture>
                        <div class="bag-cs"></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bl-3w">
            <div class="case-bl case-bl-1 show">
                <h2 class="title-case"><a href="{{$casesLink}}" style="color: #42d260;">
                        <img alt="Case studies" src="{{asset('view/images/All_Case_studees_icon.svg')}}"
                            style="margin-right: 14px;width: 22px;">Case studies</a>
                </h2>
                @foreach ($cases as $key => $case)
                    <div class="flex block-in-s block-in-{{$key}} {{!$key ? 'active' : ''}}">
                        <h3 class="title-case-2">{{ $case['title'] }}</h3>
                        {!!$case['description']!!}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex mob">
            @foreach ($cases as $key => $case)
                <div class="block-3c block-in  block-n-{{$key}} {{!$key ? 'active' : ''}}">
                    <h3 class="title-cs" style="color: {{$case['color']}};">{!!$case['altTitle']!!}</h3>
                    <picture>
                        @foreach ($case['picture']['srcset'] as $set)
                            <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                        @endforeach
                        <img alt="{{$case['picture']['alt']}}" src="{{$case['picture']['src']}}" style="width: 100%;"></source>
                    </picture>
                </div>
                
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/case.css)
