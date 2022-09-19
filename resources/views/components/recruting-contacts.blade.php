@props([
    'title' => 'Get in touch',
    'secondTitle' => 'Trembit',
    'thirdTitle' => 'Inquiries',
    'address' => 'Moskovs\'ka str. 23, 4rd Floor<br>Kyiv, , NY 01010',
    'email' => 'welcome@trembit.com',
    'bgImage' => [
        'src' => asset('img/contacts/bg.jpg'),
        'alt' => 'Trembit',
        'srcset' => [
            [
                'link' => asset('img/contacts/bg.webp'),
                'type' => 'image/webp',
            ],
        ],
    ],
    'bgLogo' => [
        'src' => asset('img/contacts/trembit.png'),
        'alt' => 'Trembit',
        'srcset' => [
            [
                'link' => asset('img/contacts/trembit.webp'),
                'type' => 'image/webp',
            ],
        ],

    ],
    'links' => [
        [
            'icon' => [
                'src' => asset('img/contacts/mail.png'),
                'alt' => 'Mail',
                'srcset' => [
                    [
                        'link' => asset('img/contacts/mail.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'text' => 'Want to hire us?',
            'link' => 'mailto:welcome@trembit.com'
        ],
        [
            'icon' => [
                'src' => asset('img/contacts/phone.png'),
                'alt' => 'Phone',
                'srcset' => [
                    [
                        'link' => asset('img/contacts/phone.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'text' => 'Join our team',
            'link' => '#contact-section'
        ],
        [
            'icon' => [
                'src' => asset('img/contacts/review.png'),
                'alt' => 'Review',
                'srcset' => [
                    [
                        'link' => asset('img/contacts/review.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'text' => 'Review us',
            'link' => 'https://clutch.co/profile/trembit'
        ],
        [
            'icon' => [
                'src' => asset('img/contacts/question.png'),
                'alt' => 'Question',
                'srcset' => [
                    [
                        'link' => asset('img/contacts/question.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'text' => 'Other inquiries',
            'link' => 'mailto:welcome@trembit.com'
        ],
    ]

])
<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__row">
                <div class="contacts__col">
                    <h3 class="contacts__title contacts__title-line">{{$title}}</h3>
                    <div class="contacts__map">
                        @if ($iframe ?? false)
                           {{$iframe}} 
                        @endif
                    </div>
                </div>
                <div class="contacts__col">
                    <h3 class="contacts__title">{{$secondTitle}}</h3>
                    <address>{!! $address !!}</address><a
                        href="mailto:{{$email}}">{{$email}}</a>
                </div>
                <div class="contacts__col">
                    <h3 class="contacts__title">{{$thirdTitle}}</h3>
                    @foreach ($links as $link)
                        
                    <a class="contacts__link" href="{{$link['link']}}">
                        <picture>
                            @foreach ($link['icon']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$link['icon']['alt']}}" src="{{$link['icon']['src']}}" ></source>
                        </picture>
                        {{$link['text']}}
                    </a>

                    @endforeach
                </div>
            </div>
            <div class="bg-img-overlay">
                <picture>
                    @foreach ($bgImage['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$bgImage['alt']}}" src="{{$bgImage['src']}}" ></source>
                </picture>
            </div>
            <div class="contacts__logo">
                <picture>
                    @foreach ($bgLogo['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$bgLogo['alt']}}" src="{{$bgLogo['src']}}" ></source>
                </picture>
            </div>
        </div>
    </div>
</section>
