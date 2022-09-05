@props([
    'title' => 'Our contacts',
    'left' => [
        'title' => 'Get in touch',
    ],
    'right' => [
        'top' => [
            'Trembit',
            'Moskovs\'ka str. 23',
            '4rd Floor',
            'Kyiv',
            'welcome@trembit.com'
        ],
        'bottom' => [
            'Inquiries',
            [
                'link' => 'mailto:welcome@trembit.com',
                'image' => asset('view/images/letter.webp'),
                'text' => 'Want to hire us?'
            ],
            [
                'link' => 'mailto:welcome@trembit.com',
                'image' => asset('view/images/phone.webp'),
                'text' => 'Join our team'
            ],
            [
                'link' => 'https://clutch.co/profile/trembit',
                'image' => asset('view/images/comment.webp'),
                'text' => 'Review us'
            ],
            [
                'link' => 'mailto:welcome@trembit.com',
                'image' => asset('view/images/question.webp'),
                'text' => 'Other inquiries'
            ],
        ]
    ],
    'logo' => asset('view/images/logo.svg')
])
<section id="cont-m" style="background: #D3F7FC;">
    <div class="wrapper">
        <h1 style="font: normal normal bold 45px/55px Lato; color: #f6583e; margin-top: 50px;">{{$title}}</h1>
        <div>
            <div class="flex main-m-box">
                <div>
                    <ul>
                        <li class="main-ct-n frst">{{$left['title']}}</li>
                        <li>
                            {{$iframe ?? ''}}
                        </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        @foreach($right['top'] as $idx => $item)
                            <li class="{{!$idx ? 'main-ct-n' : ''}}">{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        @foreach($right['bottom'] as $idx=>$item)
                            <li class="{{!$idx ? 'main-ct-n' : ''}}">
                                @if(is_string($item))
                                    {{$item}}
                                @endif
                                @if(is_array($item))
                                        <a href="{{$item['link']}}" style="color: white;">
                                            <picture>
                                                <source srcset="{{$item['image']}}" type="image/webp">
                                                    <img class="img-box-c" src="{{$item['image']}}" alt="letter">
                                                </source>
                                            </picture>
                                            {{$item['text']}}
                                        </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="logo-ct">
                <img src="{{$logo}}" alt="logo">
            </div>
        </div>
    </div>
</section>
