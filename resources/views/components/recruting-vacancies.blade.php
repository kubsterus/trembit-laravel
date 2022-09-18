@props([
    'title' => 'Hot vacancies',
    'titleIcon' => [
        'src' => asset('img/vacancies/01.webp'),
        'alt' => 'Hot vacancies',
        'srcset' => [
            [
                'link' => asset('img/vacancies/01.png'),
                'type' => 'image/webp',
            ],
        ],
    ],
    'joinButton' => [
        'link' => '#',
        'label' => 'JOIN OUR TEAM'
    ],
    'items' => [
        [
            'picture' => [
                'src' => asset('img/vacancies/02.webp'),
                'alt' => 'Project Manager',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/02.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Project Manager',
            'description' => 'At least 2 year of experience in Project
                            management<br><br>Strong analytical skills.<br><br>Practical experience in applying key BA
                            technics (use cases, user stories, prioritization, mind mapping, functional decomposition,
                            items tracking, risk management estimation, decision analysis, etc);<br><br>Experience in
                            leading several projects simultaneously...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
        [
            'picture' => [
                'src' => asset('img/vacancies/03.webp'),
                'alt' => '',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/03.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'React Engineer<br>(Videostreaming Product)',
            'description' => '2+ years experience with React<br><br>4+ years of experience
                            developing web-based software products<br><br>Strong knowledge of React and JS
                            libraries/toolings, react hooks, redux/mobx...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
        [
            'picture' => [
                'src' => asset('img/vacancies/04.webp'),
                'alt' => 'Project Manager',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/04.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Project Manager',
            'description' => 'At least 2 year of experience in Project
                            management<br><br>Strong analytical skills.<br><br>Practical experience in applying key BA
                            technics (use cases, user stories, prioritization, mind mapping, functional decomposition,
                            items tracking, risk management estimation, decision analysis, etc);<br><br>Experience in
                            leading several projects simultaneously...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
        [
            'picture' => [
                'src' => asset('img/vacancies/05.webp'),
                'alt' => 'Project Manager',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/05.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Developer<br>(Videostreaming Product)',
            'description' => '2+ years experience with React<br><br>4+ years of experience
                            developing web-based software products<br><br>Strong knowledge of React and JS
                            libraries/toolings, react hooks, redux/mobx...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
        [
            'picture' => [
                'src' => asset('img/vacancies/02.webp'),
                'alt' => 'Project Manager',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/02.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Project Manager',
            'description' => 'At least 2 year of experience in Project
                            management<br><br>Strong analytical skills.<br><br>Practical experience in applying key BA
                            technics (use cases, user stories, prioritization, mind mapping, functional decomposition,
                            items tracking, risk management estimation, decision analysis, etc);<br><br>Experience in
                            leading several projects simultaneously...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
        [
            'picture' => [
                'src' => asset('img/vacancies/03.webp'),
                'alt' => 'Project Manager',
                'srcset' => [
                    [
                        'link' => asset('img/vacancies/03.png'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'React Engineer<br>(Videostreaming Product)',
            'description' => '2+ years experience with React<br><br>4+ years of experience
                            developing web-based software products<br><br>Strong knowledge of React and JS
                            libraries/toolings, react hooks, redux/mobx...',
            'button' => [
                'link' => '#',
                'label' => 'Show More'
            ]
        ],
    ]
])
<section class="vacancies">
    <div class="container">
        <h2 class="title title_img vacancies__title">
            <div class="title_img-icon">
                <picture>
                    @foreach ($titleIcon['srcset'] as $set)
                        <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                    @endforeach
                    <img alt="{{ $titleIcon['alt'] }}" src="{{ $titleIcon['src'] }}"></source>
                </picture>
            </div>{{$title}}
        </h2>
        <div class="vacancies__row">
            @foreach ($items as $item)
                
            <div class="vacancies__col">
                <div class="vacancies__item">
                    <div class="vacancies__item-left">
                        <div class="vacancies__item-icon">
                            <picture>
                                @foreach ($item['picture']['srcset'] as $set)
                                    <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                                @endforeach
                                <img alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                            </picture>
                        </div>
                    </div>
                    <div class="vacancies__item-right">
                        <h3 class="vacancies__item-title">{!!$item['title']!!}</h3>
                        <p class="vacancies__item-desc">{!!$item['description']!!}</p>
                        <a class="btn vacancies__item-btn" href="{{$item['button']['link']}}">{{$item['button']['label']}}</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div><a class="btn vacancies__btn" href="{{$joinButton['link']}}">{{$joinButton['label']}}</a>
    </div>
</section>
