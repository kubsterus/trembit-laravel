@props([
    'casesLink' => 'portfolio.html',
    'cases' => [
        [
            'picture' => [
                'src' => 'view/images/Messaging_Platform.png',
                'alt' => 'Messaging Platform',
                'srcset' => [
                    [
                        'link' => 'view/images/Messaging_Platform.webp',
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
                'src' => 'view/images/iRecords.png',
                'alt' => 'Messaging Platform',
                'srcset' => [
                    [
                        'link' => 'view/images/iRecords.webp',
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
                'src' => 'view/images/Messaging_Platform.png',
                'alt' => 'Messaging Platform',
                'srcset' => [
                    [
                        'link' => 'view/images/Messaging_Platform.webp',
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
                'src' => 'view/images/Messaging_Platform.png',
                'alt' => 'Messaging Platform',
                'srcset' => [
                    [
                        'link' => 'view/images/Messaging_Platform.webp',
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
