@props([
    'title' => 'Feedback from<br> our customers',
    'subTitle' => 'It may seem that we have a high opinion of ourselves and brag about our work.We truly consider our WebRTC development company to be top notch. But fortunately, we are not the only ones who think this way, and you can get acquainted with what our clients think of us.',
    'items' => [
        [
            'content' => 'Trembit has deep-expertise and experience in WebRTC and tokbox. They know the inner workings of the tech and were able to inherit our semi-functional code and get it to work where multiple prior teams couldn\'t. It was a tough project and yet they breezed through it. We\'d highly recommend them to anyone looking to build video tech.',
            'cardBG' => 'view/images/svg/Yellow.svg',
            'picture' => [
                'src' => 'view/images/person_2.png',
                'alt' => 'Whitney Kramer',
                'srcset' => [
                    [
                        'link' => 'view/images/person_2.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'name' => 'Whitney Kramer',
            'position' => 'Founder of Meetaway'
        ],
        [
            'content' => 'Their proactive team gets things done as if it were their own project, consistently delivering high-quality outputs. Trembit&rsquo;s handy suggestions, adaptability, and customer-oriented approach stand out, but what really differentiates them is their ability to deeply understand business needs.',
            'cardBG' => 'view/images/svg/Grren.svg',
            'picture' => [
                'src' => 'view/images/person_1.png',
                'alt' => 'Aaron Castaneda',
                'srcset' => [
                    [
                        'link' => 'view/images/person_1.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'name' => 'Aaron Castaneda',
            'position' => 'Product Manager of Learnster'
        ],
        [
            'content' => 'Trembit are developing our Adobe Air SDK for the last 3 years. The team is always responsive and helpful when we have technical support issues from our clients and Trembit always delivers fast when we have new request showing high and professional skill. Thank you for the great service!',
            'cardBG' => 'view/images/svg/Blue.svg',
            'picture' => [
                'src' => 'view/images/person_3.png',
                'alt' => 'Gil Meroz',
                'srcset' => [
                    [
                        'link' => 'view/images/person_3.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'name' => 'Gil Meroz',
            'position' => 'Head of Mobile&amp;Analytics at Appsflyer'
        ]
    ]
    
])
<section id="feedback">
    <div class="wrapper flex" style="padding:20px;">
        <div class="block-wt-50 desktop">
            <h2 class="feed-title" style="font: normal normal bold 70px/94px Lato; color: #3C3C3C; margin-block-end: 0em; text-align: right; margin-right: 7%; width: 100%;">{!!$title!!}</h2>
            <p>{{$subTitle}}</p>
            @if (count($items))
                
            <div class="im1" style="margin-bottom:75px;background-image: url({{$items[0]['cardBG']}});">
                <p>{{$items[0]['content']}}</p>
                <div class="flex-block">
                    <div>
                        <picture>
                            @foreach ($items[0]['picture']['srcset'] as $set)
                                <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                            @endforeach
                            <img width="150" height="150" alt="{{ $items[0]['picture']['alt'] }}" src="{{ $items[0]['picture']['src'] }}"></source>
                        </picture>
                    </div>
                    <div>
                        <span class="h4">{{$items[0]['name']}}</span>
                        <p>{{$items[0]['position']}}</p>
                    </div>
                </div>
            </div>

            @endif
        </div>
        <div class="block-wt-50 desktop">
            @foreach ($items as $key => $item)
            @if (!$key)
               @continue 
            @endif
                
            <div class="im{{$key + 1}}" style="margin-bottom:75px;background-image: url(view/images/svg/Grren.svg);">
                <p>{{$item['content']}}</p>
                <div class="flex-block">
                    <div>
                        <picture>
                            @foreach ($item['picture']['srcset'] as $set)
                                <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                            @endforeach
                            <img width="150" height="150" alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                        </picture>
                    </div>
                    <div>
                        <span class="h4">{{$item['name']}}</span>
                        <p>{{$item['position']}}</p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="mob">
            <h2 class="feed-title" style="font: normal normal bold 36px/48px Lato;color: #3C3C3C;text-align: right;margin-right: 6%;">{!!$title!!}</h2>
            <p>{{$subTitle}}</p>
        </div>
        <div class="riema mob" style="width:100%;position:relative;">
            @foreach ($items as $key => $item)
                
            <div>
                <div class="im{{$key + 1}}" style="margin-bottom:5px;background-image: url({{$item['cardBG']}});">
                    <p>{{$item['content']}}</p>
                    <div class="flex-block">
                        <div style="margin: auto;">
                            <picture>
                                @foreach ($item['picture']['srcset'] as $set)
                                    <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                                @endforeach
                                <img width="150" height="150" alt="{{ $item['picture']['alt'] }}" src="{{ $item['picture']['src'] }}"></source>
                            </picture>
                        </div>
                        <div style="width:100%;text-align: center;">
                            <span class="h4">{{$item['name']}}</span>
                            <p>{{$item['position']}}</p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/feedback.css)
