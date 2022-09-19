@props([
    'title' => 'Featured case studies',
    'text' => 'Our work in the field of media and entertainment speaks louder than we. Therefore, we invite you to check out the latest projects we have completed.',
    'items' => [
        [
            'href' => '/portfolio.html',
            'title' => 'Featured case studies',
            'picture' => [
                'src' => asset('../img/cases/01.png'),
                'alt' => 'Featured case studies',
                'srcset' => [
                    [
                        'link' => asset('../img/cases/01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'href' => '/portfolio.html#titleSection6',
            'title' => 'Bullpit',
            'picture' => [
                'src' => asset('../img/cases/02.png'),
                'alt' => 'Bullpit',
                'srcset' => [
                    [
                        'link' => asset('../img/cases/02.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'href' => '/portfolio.html#titleSection5',
            'title' => 'DateNight',
            'picture' => [
                'src' => asset('../img/cases/03.png'),
                'alt' => 'DateNight',
                'srcset' => [
                    [
                        'link' => asset('../img/cases/03.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'href' => '/portfolio.html#titleSection7',
            'title' => 'iRecord',
            'picture' => [
                'src' => asset('../img/cases/04.png'),
                'alt' => 'iRecord',
                'srcset' => [
                    [
                        'link' => asset('../img/cases/04.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'href' => '/portfolio.html#titleSection3',
            'title' => 'Healthy diet app',
            'picture' => [
                'src' => asset('../img/cases/05.png'),
                'alt' => 'Healthy diet app',
                'srcset' => [
                    [
                        'link' => asset('../img/cases/05.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
    ]
])
<section class="cases">
    <div class="cases__container">
        <div class="cases__row">
            <div class="cases__col">
                <h2 class="cases__title">{{$title}}</h2>
            </div>
            <div class="cases__col">
                <p class="cases__desc">{{$text}}</p>
            </div>
        </div>
        <div class="cases-slider">
            @foreach ($items as $item)
                
            <div class="cases-slider__item">
                <a class="cases-slider__item-body" href="{{$item['href']}}">
                    <div class="cases-slider__item-img">
                        <picture>
                            @foreach ($item['picture']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}" ></source>
                        </picture>
                    </div>
                    <h3 class="cases-slider__item-title">{{$title}}</h3>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</section>
