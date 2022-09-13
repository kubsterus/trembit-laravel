@props([
    'title' => 'Benefits Of Our Services',
    'content' => 'Video streaming mobile app development can be applied in various areas and purposes. Therefore, you only need to let us know about your goals, and we will take care of the most effective and least costly ways to achieve them. Using our knowledge and skills, you can get your own product with an individual design that will make your brand more recognizable and help you convey information to your customers or partners in a high-quality and innovative way.',
    'picture' => [
        'src' => 'view/images/social_media.png',
        'alt' => 'social',
        'srcset' => [
            [
                'link' => 'view/images/social_media.webp',
                'type' => 'image/webp',
            ],
        ],
    ],
])
<section class="benefits">
    <div class="wrapper flex">
        <div class="bl-3w">
            <picture>
                @foreach ($picture['srcset'] as $set)
                    <source srcset="{{ $set['link'] }}" type="{{ $set['type'] }}">
                @endforeach
                <img alt="{{ $picture['alt'] }}" src="{{ $picture['src'] }}"></source>
            </picture>
        </div>
        <div class="bl-7w">
            <h2>{{$title}}</h2>
            <p>{{$content}}</p>
        </div>

    </div>
</section>
