@props([
    'title' => 'Our areas of expertise',
    'items' => [
        [
            'title' => 'Telemedicine',
            'picture' => [
                'src' => 'img/skills/01.png',
                'alt' => 'Telemedicine',
                'srcset' => [
                    [
                        'link' => 'img/skills/01.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'title' => 'Entertainment & Social media',
            'picture' => [
                'src' => 'img/skills/02.png',
                'alt' => 'Entertainment & Social media',
                'srcset' => [
                    [
                        'link' => 'img/skills/02.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'title' => 'Educational platforms',
            'picture' => [
                'src' => 'img/skills/03.png',
                'alt' => 'Educational platforms',
                'srcset' => [
                    [
                        'link' => 'img/skills/03.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'title' => 'Dating apps',
            'picture' => [
                'src' => 'img/skills/04.png',
                'alt' => 'Dating apps',
                'srcset' => [
                    [
                        'link' => 'img/skills/04.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'title' => 'Online Events',
            'picture' => [
                'src' => 'img/skills/05.png',
                'alt' => 'Online Events',
                'srcset' => [
                    [
                        'link' => 'img/skills/05.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
    ]
])
<section class="skills">
    <div class="container">
        <h2 class="title title_blue">Our areas of expertise</h2>
        <div class="skills__row">
            @foreach ($items as $item)
                
            <div class="skills__col">
                <div class="skills__item">
                    <div class="skills__item-icon">
                        <picture>
                            @foreach ($item['picture']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}"></source>
                        </picture>
                    </div>
                    <h3 class="skills__item-title">{{$item['title']}}</h3>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
