@props([
    'title' => 'Services<br>We Provide',
    'image' => [
        'src' => asset('../img/benefits/phones.png'),
        'alt' => 'Services We Provide',
        'srcset' => [
            [
                'link' => asset('../img/benefits/phones.webp'),
                'type' => 'image/webp',
            ],
        ],
    ],
    'items' => [
        [
            'image' => [
                'src' => asset('./img/benefits/icons/01.png'),
                'alt' => 'R&D',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/01.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'R&D',
            'content' => [
                'A competent approach to the process of developing solutions for
                            the media and entertainment industry involves a set of research tasks that are solved by our
                            analysts. This includes defining the target audience, as well as analyzing the market and
                            competitors. According to the research, experts determine the choice of technology stack and
                            application functionality.',
            ]
        ],
        [
            'image' => [
                'src' => asset('./img/benefits/icons/02.png'),
                'alt' => 'Web Development',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/02.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Web Development',
            'content' => [
                'The multi-stage and diverse process of creating web-based software involves research, creative and technical work. <br>During web development:',
                [
                    'our analysts research the client&rsquo;s market and business;',
                    'programmers do frontend and backend development;',
                    'UX / UI designer develops the aesthetic appearance and usability of the application;',
                    'QA specialists make sure that a bug-free product enters the market.'
                ],
                'As a result, our clients receive cutting-edge web-based media apps, such as streaming and VOD platforms.'

            ]
        ],
        [
            'image' => [
                'src' => asset('./img/benefits/icons/03.png'),
                'alt' => 'Web Development Kit',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/03.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Web Development Kit',
            'content' => [
                'Our customers have access to functional blocks to develop and enhance their media and entertainment applications. iOS, Android, and JavaScript SDKs are available. Each of these toolkits is not only capable of creating peer-to-peer video streaming solutions, but also creating a secure communications environment.'
            ]
        ],
        [
            'image' => [
                'src' => asset('./img/benefits/icons/04.png'),
                'alt' => 'QA',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/04.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'QA',
            'content' => [
                'The final step before an application is released is testing. Only after a positive verdict by a QA specialist, the application is delivered to the end-user, while its owners can be confident in its high performance and competitiveness.'
            ]
        ],
        [
            'image' => [
                'src' => asset('./img/benefits/icons/05.png'),
                'alt' => 'Mobile Development',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/05.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Mobile Development',
            'content' => [
                'From mobile dating apps to high-quality video content delivery services, our team goes out of its way to make cutting-edge technology work for our client. Our iOS and Android developers will make your business spread and easily accessible to anyone with a mobile phone.<br>When developing mobile applications, we work with different platforms and technologies, such as Kotlin, JetPack, RxJava, Swift, SwiftUI, Combine, RxSwift, etc. Our applications are integrated with existing services and software, which allows us to increase their capabilities and functionality.<br>Whether the application is developed from scratch or using off-the-shelf software and hardware, it will be customized and adapted to your business requirements.'
            ]
        ],
        [
            'image' => [
                'src' => asset('./img/benefits/icons/06.png'),
                'alt' => 'UI/UX',
                'srcset' => [
                    [
                        'link' => asset('../img/benefits/icons/06.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'UI/UX',
            'content' => [
                'The technological aspect of development is very important, but if the application is inconvenient to use or its design is annoying, users are unlikely to want it on their devices.<br>In both mobile and web application development, the process of creating a UI/UX design requires analysis of user needs, wireframing, and prototyping. Our designers think about everything, from colors and fonts to the layout of controls, to provide the best user experience with the application. Therefore, our UI / UX designers pay special attention to wireframing and prototyping, and testers test the product for usability before its release.'
            ]
        ],
    ]
])
<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <h2 class="title title_black benefits__title">{!! $title !!}</h2>
            <div class="benefits__img">
                <picture>
                    @foreach ($image['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$image['alt']}}" src="{{$image['src']}}" ></source>
                </picture>
            </div>
            <div class="benefits__row">
                    @foreach($items as $key => $item)

                    @if ($key % 4 === 0)
                        <div class="benefits__col">
                    @endif

                    <div class="benefits__item">
                        <div class="benefits__item-icon">
                            <picture>
                                @foreach ($item['image']['srcset'] as $set)
                                    <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                                @endforeach
                                <img alt="{{$item['image']['alt']}}" src="{{$item['image']['src']}}" ></source>
                            </picture>
                        </div>
                        <h3 class="benefits__item-title">{{$item['title']}}</h3>
                        @if(is_string($item['content']))
                            <p class="benefits__item-desc">
                                {{$item['content']}}
                            </p>
                        @endif
                        @if(is_array($item['content']))
                            @foreach($item['content'] as $content)
                                @if(is_string($content))
                                    <p class="benefits__item-desc">{{$content}}</p>
                                @endif
                                @if(is_array($content))
                                    <ul class="benefits__item-list">
                                        @foreach($content as $cont_item)
                                        <li>{{$cont_item}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    @if (($key + 1) % 4 === 0 || ($key + 1) >= count($items))
                        </div> 
                    @endif

                    @endforeach

                    {{-- <div class="benefits__item">
                        <div class="benefits__item-icon"><picture><source srcset="../img/benefits/icons/02.webp" type="image/webp"><img src="../img/benefits/icons/02.png" alt="Web Development"></source></picture></div>
                        <h3 class="benefits__item-title">Web Development</h3>
                        <p class="benefits__item-desc">The multi-stage and diverse process of creating web-based software involves research, creative and technical work. <br>During web development:</p>
                        <ul class="benefits__item-list">
                            <li>our analysts research the client&rsquo;s market and business; </li>
                            <li>programmers do frontend and backend development;</li>
                            <li>UX / UI designer develops the aesthetic appearance and usability of the application;</li>
                            <li>QA specialists make sure that a bug-free product enters the market.</li>
                        </ul>
                        <p class="benefits__item-desc">As a result, our clients receive cutting-edge web-based media apps, such as streaming and VOD platforms.</p>
                    </div>
                    <div class="benefits__item">
                        <div class="benefits__item-icon"><picture><source srcset="../img/benefits/icons/03.webp" type="image/webp"><img src="../img/benefits/icons/03.png" alt="Web Development Kit"></source></picture></div>
                        <h3 class="benefits__item-title">Web Development Kit</h3>
                        <p class="benefits__item-desc">Our customers have access to functional blocks to develop and enhance their media and entertainment applications. iOS, Android, and JavaScript SDKs are available. Each of these toolkits is not only capable of creating peer-to-peer video streaming solutions, but also creating a secure communications environment.</p>
                    </div>
                    <div class="benefits__item">
                        <div class="benefits__item-icon"><picture><source srcset="../img/benefits/icons/04.webp" type="image/webp"><img src="../img/benefits/icons/04.png" alt="QA"></source></picture></div>
                        <h3 class="benefits__item-title">QA</h3>
                        <p class="benefits__item-desc">The final step before an application is released is testing. Only after a positive verdict by a QA specialist, the application is delivered to the end-user, while its owners can be confident in its high performance and competitiveness.</p>
                    </div>
                </div>
                <div class="benefits__col">
                    <div class="benefits__item">
                        <div class="benefits__item-icon"><picture><source srcset="../img/benefits/icons/05.webp" type="image/webp"><img src="../img/benefits/icons/05.png" alt="Mobile Development"></source></picture></div>
                        <h3 class="benefits__item-title">Mobile Development</h3>
                        <p class="benefits__item-desc">From mobile dating apps to high-quality video content delivery services, our team goes out of its way to make cutting-edge technology work for our client. Our iOS and Android developers will make your business spread and easily accessible to anyone with a mobile phone.<br>When developing mobile applications, we work with different platforms and technologies, such as Kotlin, JetPack, RxJava, Swift, SwiftUI, Combine, RxSwift, etc. Our applications are integrated with existing services and software, which allows us to increase their capabilities and functionality.<br>Whether the application is developed from scratch or using off-the-shelf software and hardware, it will be customized and adapted to your business requirements.</p>
                    </div>
                    <div class="benefits__item">
                        <div class="benefits__item-icon"><picture><source srcset="../img/benefits/icons/06.webp" type="image/webp"><img src="../img/benefits/icons/06.png" alt="UI/UX"></source></picture></div>
                        <h3 class="benefits__item-title">UI/UX</h3>
                        <p class="benefits__item-desc">The technological aspect of development is very important, but if the application is inconvenient to use or its design is annoying, users are unlikely to want it on their devices.<br>In both mobile and web application development, the process of creating a UI/UX design requires analysis of user needs, wireframing, and prototyping. Our designers think about everything, from colors and fonts to the layout of controls, to provide the best user experience with the application. Therefore, our UI / UX designers pay special attention to wireframing and prototyping, and testers test the product for usability before its release.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
