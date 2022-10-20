@props([
    'title' => 'Official Partners',
    'items' => [
        [
            'picture' => [
                'src' => asset('view/images/twilio.svg'),
                'alt' => 'Twilio',
                'srcset' => [],
            ],
            'link' => 'https://www.twilio.com/',
        ],
        [
            'picture' => [
                'src' => asset('view/images/PARTNERS.png'),
                'alt' => 'social media',
                'srcset' => [
                    [
                        'link' => asset('view/images/PARTNERS.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => 'https://www.red5pro.com/',
        ],
        [
            'picture' => [
                'src' => asset('view/images/logo_header_white-01.png'),
                'alt' => 'Eyeson',
                'srcset' => [
                    [
                        'link' => asset('view/images/logo_header_white-01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => 'https://www.digitalsamba.com/',
        ],
        [
            'picture' => [
                'src' => asset('view/images/eyesonteam-ar21.png'),
                'alt' => 'Eyeson',
                'srcset' => [
                    [
                        'link' => asset('view/images/eyesonteam-ar21.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => 'https://www.eyeson.com/',
        ],
        [
            'picture' => [
                'src' => asset('view/images/vonage.webp'),
                'alt' => 'Vonage',
                'srcset' => [
                    [
                    'link' => asset('view/images/vonage.webp'),
                    'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => 'https://www.vonage.com/',
        ],
    ],
])
<section class="partners">
    <div class="partners__container">
        <h2>{{$title}}</h2>
        <div class="partners__row">
            @foreach ($items as $item)
                <div class="partners__col">
                    <a href="{{ $item['link'] }}" target="_blank" class="partners__item">
                        <picture>
                            @foreach ($item['picture']['srcset'] as $set)
                                <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                            @endforeach
                            <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                        </picture>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
