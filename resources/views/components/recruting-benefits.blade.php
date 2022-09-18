@props([
    'title' => 'We love what we do, we dedicate to every project, we are a top experts in video streaming.',
    'items' => [
        [
            'image' => [
                'link' => 'img/benefits/01.svg',
                'alt' => '12 year on the market'
            ],
            'text' => '12 year<span>on the market</span>'
        ],
        [
            'image' => [
                'link' => 'img/benefits/02.svg',
                'alt' => '45+ team members'
            ],
            'text' => '45+<span>team members</span>'
        ],
        [
            'image' => [
                'link' => 'img/benefits/03.svg',
                'alt' => '120+ projects done'
            ],
            'text' => '120+<span>projects done</span>'
        ],
    ]
])
<section class="benefits">
    <div class="container">
        <h2 class="title">{{$title}}</h2>
        <div class="benefits__row">
            @foreach ($items as $item)
                
            <div class="benefits__col">
                <div class="benefits__item"><img class="benefits__item-icon" src="{{$item['image']['link']}}"
                        alt="{{$item['image']['link']}}">
                    <h3 class="benefits__item-title">{!! $item['text'] !!}</h3>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
