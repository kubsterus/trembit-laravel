@props([
    'title' => 'Blog',
    'allButton' => [
        'link' => 'https://trembit.com/blog/',
        'label' => 'All'
    ],
    'items' => [
        [
            'link' => 'https://trembit.com/blog/hq-trivia-software-architecture/',
            'title' => 'HQ Trivia software architecture',
            'picture' => [
                'src' => 'view/images/trembivia/image-blog1.jpg',
                'alt' => 'Image blog 1',
                'srcset' => [
                    [
                        'link' => 'view/images/trembivia/image-blog1.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
        [
            'link' => 'https://trembit.com/blog/hq-trivia-business-model-how-much-do-they-get/',
            'title' => 'HQ Trivia business model, how much $$$ do they get?',
            'picture' => [
                'src' => 'view/images/trembivia/image-blog2.jpg',
                'alt' => 'Image blog 1',
                'srcset' => [
                    [
                        'link' => 'view/images/trembivia/image-blog2.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
        ],
    ]
])
<section id="blogSection">
    <h3 id="blog-title">Blog</h3>
    <div class="text-container">
        @foreach ($items as $key => $item)
        <a href="{{$item['link']}}" target="_blank">
            <picture>
                @foreach ($item['picture']['srcset'] as $set)
                    <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                @endforeach
                <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}" height="200" ></source>
            </picture>
            <h5>{{$item['title']}}</h5>
        </a>
        @endforeach
    </div>
    <div>
        <a class="link-demo" href="{{$allButton['link']}}" target="_blank">{{$allButton['label']}}</a>
    </div>
</section>
