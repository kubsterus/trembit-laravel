@props([
    'title' => 'Media And Entertainment Software Solutions',
    'items' => [
        [
            'image' => [
                'src' => asset('../img/cards/01.png'),
                'alt' => 'Customization',
                'srcset' => [
                    [
                        'link' => asset('../img/cards/01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Video Chat Apps',
            'content' => 'Daily chatting has become an integral part of our lives. Messengers are used for both entertainment and business purposes. In the portfolio of our entertainment software development company you will see chat apps for dating as well as social and business communication software.'   
        ],
        [
            'image' => [
                'src' => asset('../img/cards/02.png'),
                'alt' => 'Video Conferencing Solutions',
                'srcset' => [
                    [
                        'link' => asset('../img/cards/02.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Video Conferencing Solutions',
            'content' => 'In the midst of a pandemic or other times when live meetings and communication are not possible, video conferencing platforms come in handy. Online parties, game nights with friends or mass events such as weddings are possible withmodern technology. Bad weather, sickness, or long distance can no longer ruin your fun.'   
        ],
        [
            'image' => [
                'src' => asset('../img/cards/03.png'),
                'alt' => 'Media Streaming Solutions',
                'srcset' => [
                    [
                        'link' => asset('../img/cards/03.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Media Streaming Solutions',
            'content' => 'Today, everyone is a bit of a journalist: we broadcast the events of our lives, or the incredible things that we have witnessed. And it is essential that video content is transmitted here and now, without delay and with first-class quality. <br>We develop solutions not only to provide smooth live streaming, but also to increase the presence of your company through the use of distinctive brand elements in creating a design.'   
        ],
    ]
])
<section class="cards">
    <div class="container">
        <h2 class="title cards__title">{{$title}}</h2>
        <div class="cards__row">
            @foreach ($items as $item)
                
            <div class="cards__col">
                <div class="cards__item">
                    <div class="cards__item-icon">
                        <picture>
                            @foreach ($item['image']['srcset'] as $set)
                                <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                            @endforeach
                            <img alt="{{$item['image']['alt']}}" src="{{$item['image']['src']}}" ></source>
                        </picture>
                    </div>
                    <h3 class="cards__item-title">{{$item['title']}}</h3>
                    <p class="cards__item-desc">{{$item['content']}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
