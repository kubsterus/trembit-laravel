@props([
    'title' => 'Why Developing An Entertainment Software With Us?',
    'text' => 'Our team consists of different specialists ranging from business analysts to quality testers. Therefore, we understand not only the technical side of software development for the media and entertainment industry but also how the business works. As a result of comprehensive knowledge and accumulated experience, we manage to create market-leading products and provide first-class service.',
    'picture' => [
        'src' => asset('../img/text-img/01.jpg'),
        'alt' => 'Why Developing An Entertainment Software With Us?',
        'srcset' => [
            [
                'link' => asset('../img/text-img/01.webp'),
                'type' => 'image/webp',
            ],
        ],
    ]
])
<section class="text-img">
    <div class="text-img__row">
        <div class="text-img__col">
            <div class="text-img__inner">
                <h2 class="title title_black text-img__title">{{$title}}</h2>
                <p class="text-img__desc">{{$text}}</p>
            </div>
        </div>
        <div class="text-img__col">
            <div class="text-img__photo">
                <picture>
                    @foreach ($picture['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$picture['alt']}}" src="{{$picture['src']}}" ></source>
                </picture>
            </div>
        </div>
    </div>
</section>
