@props([
    'title' => 'Trembit Photos',
    'galleryLink' => [
        'picture' => [
            'src' => 'img/gallery/dou.png',
            'alt' => 'DOU',
            'srcset' => [
                [
                    'link' => 'img/gallery/dou.webp',
                    'type' => 'image/webp',
                ],
            ],
        ],
        'link' => 'https://jobs.dou.ua/companies/trembit/',
        'label' => 'jobs.dou.ua/companies/trembit'
    ],
    'items' => [
        [
            'picture' => [
                'src' => 'img/gallery/01.jpg',
                'alt' => 'Picture 1',
                'srcset' => [
                    [
                        'link' => 'img/gallery/01.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/02.jpg',
                'alt' => 'Picture 2',
                'srcset' => [
                    [
                        'link' => 'img/gallery/02.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/03.jpg',
                'alt' => 'Picture 3',
                'srcset' => [
                    [
                        'link' => 'img/gallery/03.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/04.jpg',
                'alt' => 'Picture 4',
                'srcset' => [
                    [
                        'link' => 'img/gallery/04.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/05.jpg',
                'alt' => 'Picture 5',
                'srcset' => [
                    [
                        'link' => 'img/gallery/05.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/06.jpg',
                'alt' => 'Picture 6',
                'srcset' => [
                    [
                        'link' => 'img/gallery/06.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/07.jpg',
                'alt' => 'Picture 7',
                'srcset' => [
                    [
                        'link' => 'img/gallery/07.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'picture' => [
                'src' => 'img/gallery/08.jpg',
                'alt' => 'Picture 8',
                'srcset' => [
                    [
                        'link' => 'img/gallery/08.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        
    ]
])
<section class="gallery">
    <div class="container">
        <h2 class="title gallery__title">{{$title}}</h2>
        <div class="gallery__row">
            @foreach ($items as $key => $item)

            @if ($key % 2 == 0)
                <div class="gallery__col">
            @endif
                
                <div class="gallery__img">
                    <picture>
                        @foreach ($item['picture']['srcset'] as $set)
                            <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                        @endforeach
                        <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}" ></source>
                    </picture>
                </div>

            @if (($key % 2) != 0 || ($key + 1) >= count($items))
                </div>
            @endif

            @endforeach
        </div>
        
        <a class="gallery__link" href="{{$galleryLink['link']}}">
            <div class="gallery__link-logo">
                <picture>
                    @foreach ($galleryLink['picture']['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$galleryLink['picture']['alt']}}" src="{{$galleryLink['picture']['src']}}" ></source>
                </picture>
            </div>{{$galleryLink['label']}}
        </a>
    </div>
</section>
