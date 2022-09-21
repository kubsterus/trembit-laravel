@props([
    'title' => 'Our White Label Video Conference And<br>Webinar Solutions',
    'items' => [
        [
            'text' => 'White-label AI-based video conference platform is a fully customizable solution for those looking to host up to 30 participants in a video call. Vatra is a cross-platform software with a fully editable interface design. Host online meetings on your corporate platform and record them to watch later, send branded e-mails and other files securely and post-haste.',
            'photo' => [
                'src' => asset('../img/solutions/01.jpg'),
                'alt' => 'Vatra',
                'srcset' => [
                    [
                        'link' => asset('../img/solutions/01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'logo' => [
                'src' => asset('../img/solutions/vatra.png'),
                'alt' => 'Vatra',
                'srcset' => [
                    [
                        'link' => asset('../img/solutions/vatra.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => '/vatra.html'
        ],
        [
            'text' => 'Our white-label video conferencing platform, Stusan, uses WebRTC technology to create a peer-to-peer connection. In addition, all data is end-to-end encrypted, enabling a secure environment for quality communication.<br>If you are looking for a solution for webinars or small online meetings (with up to 6 participants), Stusan is what you need.',
            'photo' => [
                'src' => asset('../img/solutions/02.jpg'),
                'alt' => 'Stusan',
                'srcset' => [
                    [
                        'link' => asset('../img/solutions/02.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'logo' => [
                'src' => asset('../img/solutions/stusan.jpg'),
                'alt' => 'Stusan',
                'srcset' => [
                    [
                        'link' => asset('../img/solutions/stusan.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'link' => '/stusan.html'
        ],
    ]
])
<section class="solutions">
    <div class="container">
        <h2 class="title solutions__title">{!! $title !!}</h2>
        <div class="solutions__row">
            @foreach ($items as $item)
                <div class="solutions__col"> <a class="solutions__item" href="{{$item['link']}}">
                        <div class="solutions__item-photo">
                            <picture>
                                @foreach ($item['photo']['srcset'] as $set)
                                    <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                                @endforeach
                                <img alt="{{$item['photo']['alt']}}" src="{{$item['photo']['src']}}" ></source>
                            </picture>
                        </div>
                        <div class="solutions__item-logo">
                            <picture>
                                @foreach ($item['logo']['srcset'] as $set)
                                    <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                                @endforeach
                                <img alt="{{$item['logo']['alt']}}" src="{{$item['logo']['src']}}" ></source>
                            </picture>
                        </div>
                        <p class="solutions__item-desc">{{$item['text']}}</p>
                    </a></div>
            @endforeach
        </div>
    </div>
</section>
