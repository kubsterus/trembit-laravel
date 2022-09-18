@props([
    'title' => 'Our Values',
    'secondTitle' => 'Our mission',
    'text' => 'Build a working environment that supports the development of the unique
            product on a global market that helps our clients to gain benefits on a competitive market and make a new
            grade in communication and connections.',
    'bgImage' => [
        'src' => 'img/values/01.jpg',
        'alt' => 'Background',
        'srcset' => [
            [
                'link' => 'img/values/bg.webp',
                'type' => 'image/webp',
            ],
        ],
    ],
    'items' => [
        [
            'picture' => [
                'src' => 'img/values/01.png',
                'alt' => 'Team',
                'srcset' => [
                    [
                        'link' => 'img/values/01.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Team',
            'description' => 'Each product is made by people. We consider it a vital necessity to
                            keep on fire of motivation in each team member that allows creating proficient and
                            revolutionary products. We respect and appreciate each member of our team.'
        ],
        [
            'picture' => [
                'src' => 'img/values/02.png',
                'alt' => 'Balance',
                'srcset' => [
                    [
                        'link' => 'img/values/02.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Balance',
            'description' => 'We live a full and healthy life, taking care of our physical and
                            mental health. We measure our success by results achieved, not the time spent on job tasks.
                        '
        ],
        [
            'picture' => [
                'src' => 'img/values/03.png',
                'alt' => 'Customers',
                'srcset' => [
                    [
                        'link' => 'img/values/03.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Customers',
            'description' => 'We believe that our success is built from our clients&rsquo;
                            success. We support our projects and customers that use them. We take the responsibility for
                            our job. Our goal to be a reliable partner for our clients.'
        ],
        [
            'picture' => [
                'src' => 'img/values/04.png',
                'alt' => 'Continuous perfection and a desire to grow',
                'srcset' => [
                    [
                        'link' => 'img/values/04.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Continuous perfection and a desire to grow',
            'description' => 'We learn from our own mistakes, and we believe it is better to act
                            and risk than to stay on the same stage. We always try to improve the process of our living,
                            work, and communication. We set superior goals and reach them.'
        ],
        [
            'picture' => [
                'src' => 'img/values/05.png',
                'alt' => 'TeLoyalty and transparencyam',
                'srcset' => [
                    [
                        'link' => 'img/values/05.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'TeLoyalty and transparencyam',
            'description' => 'We share information freely, build honest relationships with teams
                            and partners. We never stand off watching injustice and impropriety.'
        ],
    ]
])
<section class="values">
    <div class="container">
        <h2 class="title values__title">Our Values</h2>
        <div class="values__row values__row-desktop">
            @foreach ($items as $item)
                
            <div class="values__col">
                <div class="values__item-icon">
                    <picture>
                        @foreach ($item['picture']['srcset'] as $set)
                            <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                        @endforeach
                        <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                    </picture>
                </div>
            </div>

            @endforeach
        </div>
        <div class="values__row values__row-mobile">
            @foreach ($items as $item)
                
            <div class="values__col">
                <div class="values__item">
                    <div class="values__item-icon">
                        <picture>
                            @foreach ($item['picture']['srcset'] as $set)
                                <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                            @endforeach
                            <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                        </picture>
                    </div>
                    <div class="values__item-body">
                        <h3 class="values__item-title">{{$item['title']}}</h3>
                        <p class="values__item-desc">{!! $item['description'] !!}</p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <h2 class="title values__title">{{ $secondTitle }}</h2>
        <p class="subtitle values__subtitle">{{ $text }}</p>
    </div>
    <div class="bg-img m-d-none">
        <picture>
            @foreach ($bgImage['srcset'] as $set)
                <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
            @endforeach
            <img alt="{{ $bgImage['alt'] }}" src="{{ $bgImage['src'] }}"></source>
        </picture>
    </div>
</section>
