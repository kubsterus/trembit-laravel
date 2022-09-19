@props([
    'title' => 'Media And Entertainment Software Development Key Features',
    'items' => [
        [
            'image' => [
                'src' => asset('../img/peculiarities/01.png'),
                'alt' => 'Quality',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Quality',
            'content' => 'Modern entertainment industry software uses technologies such as WebRTC, which can provide high-quality media content exchange. Our applications adapt to the quality of the Internet connection and have a noise reduction function so that users receive high-quality audio and video with the lowest possible latency.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/02.png'),
                'alt' => 'Safety',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/02.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Safety',
            'content' => 'The security properties of software for entertainment are the foremost priority in development by our specialists. DTLS and SRTP security protocols as well as data transcoding ensure secure communication and media content exchange.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/03.png'),
                'alt' => 'Usability',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/03.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Usability',
            'content' => 'The user interaction with the application is strongly influenced by the design of the application, and the well-thought-out interface. Everything is important: how the elements are arranged, their size, the way the user navigates through the application, the consistency of functions, etc.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/04.png'),
                'alt' => 'Versatility',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/04.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Versatility',
            'content' => 'Our entertainment software tend to be packed with useful features, but not too much to be user-friendly. Functions are selected according to the wishes of the client and, if necessary, can even be added to a full-fledged product.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/05.png'),
                'alt' => 'Great Bandwidth',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/05.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Great Bandwidth',
            'content' => 'Media and entertainment software is often a means of communication between two or more participants. We\'ve designed a platform that can accommodate up to 30 people without compromising audio or video quality.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/06.png'),
                'alt' => 'Compatibility',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/06.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Compatibility',
            'content' => 'Our apps are compatible across platforms, devices, and browsers. Moreover, they are designed with the ability to integrate products from, for example, Google or Amazon, which expands the capabilities and range of options.'   
        ],
        [
            'image' => [
                'src' => asset('../img/peculiarities/07.png'),
                'alt' => 'Customization',
                'srcset' => [
                    [
                        'link' => asset('../img/peculiarities/07.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Customization',
            'content' => 'A key aspect in the development of media and entertainment software is a personalized approach. One of the tasks is to increase awareness of your brand. Therefore, using a white label service or developing a product from scratch, we create a design that includes the logo, color palette, and distinctive elements of your company. In this way, the user will immediately associate the application with your brand.'   
        ],
    ]
])
<section class="peculiarities">
    <div class="container">
        <h2 class="title">{{$title}}</h2>
        <div class="peculiarities__row">
            @foreach ($items as $item)
                
            <div class="peculiarities__col">
                <div class="peculiarities__item">
                    <div class="peculiarities__item-icon">
                        <picture>
                            @foreach ($item['image']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$item['image']['alt']}}" src="{{$item['image']['src']}}" ></source>
                        </picture>
                    </div>
                    <h3 class="peculiarities__item-title">{{$item['title']}}</h3>
                    <p class="peculiarities__item-desc">{{$item['content']}}</p>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</section>
