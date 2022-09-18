@props([
    'title' => 'Hiring Steps',
    'lineImage' => [
        'src' => 'img/steps/line.png',
        'alt' => '',
        'srcset' => [
            [
                'link' => 'img/steps/line.webp',
                'type' => 'image/webp',
            ],
        ],
    ],
    'items' => [
        [
            'title' => '1.Send A CV<br><br>',
            'text' => 'Find a vacancy that suits your experience and apply for it. If you
                            haven\'t found one, then you can send your resume in a separate window and describe in which
                            role you would like to work in our company'
        ],
        [
            'title' => '2.Recruiter Interview',
            'text' => 'Our recruiter will contact you, and tell all details about the
                            vacancy and the specifics of the company. You will receive feedback within 2 days.'
        ],
        [
            'title' => '3.Technical Interview',
            'text' => 'A technical interview is usually conducted by 2 people - a project
                            leader + senior developer. During the conversation, share your practical experience and
                            further professional steps in career. And we will tell you the details of the project.'
        ],
        [
            'title' => '4.Final Interview',
            'text' => 'The final interview is conducted by the CEO and HR of the company.
                            Here we will get to know you better and understand whether we are suitable for each other.'
        ],
        [
            'title' => '5.Offer<br><br>',
            'text' => 'If this is total match, we will send you an offer and will be
                            looking forward to seeing you in our team!'
        ],
    ]
])
<section class="steps">
    <div class="container">
        <h2 class="title title_blue steps__title">{{$title}}</h2>
        <div class="steps__inner">
            <div class="steps__line">
                <picture>
                    @foreach ($lineImage['srcset'] as $set)
                        <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                    @endforeach
                    <img alt="{{ $lineImage['alt'] }}" src="{{ $lineImage['src'] }}"></source>
                </picture>
            </div>
            <div class="steps__row">
                @foreach ($items as $item)
                    
                <div class="steps__col">
                    <div class="steps__item">
                        <h3 class="steps__item-title">{!!$item['title']!!}</h3>
                        <p class="steps__item-desc">{{$item['text']}}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
