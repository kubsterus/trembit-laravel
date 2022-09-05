@props([
    'title' => 'Slider title',
    'description' => '',
    'items' => [
        [
            'title' => 'Messaging Platform',
            'link' => '/portfolio.html',
            'image' => asset('view/images/Messaging_Platform.webp')
        ],
        [
            'title' => 'Bullpit',
            'link' => '/portfolio.html#titleSection6',
            'image' => asset('view/images/Bullpit.webp')
        ],
        [
            'title' => 'DateNight',
            'link' => '/portfolio.html#titleSection5',
            'image' => asset('view/images/Day_and_Night.webp')
        ],
        [
            'title' => 'iRecords',
            'link' => '/portfolio.html#titleSection7',
            'image' => asset('view/images/iRecords.webp')
        ],
        [
            'title' => 'Healthy diet app',
            'link' => '/portfolio.html#titleSection3',
            'image' => asset('view/images/main_portfolio_3.webp')
        ],
    ]
])
<section id="slider">
    {{$top_content ?? ''}}
    <h2>{{$title}}</h2>
    @if($description)
        <p>{{$description}}</p>
    @endif
    <div class="riema" style="width:100%;position:relative;margin-left: 150px;float: left;display: block;overflow: hidden!important;">
        @foreach($items as $idx => $item)
        <div><a href="{{$item['link'] ?? ''}}">
                <picture><source srcset="{{$item['image']}}" type="image/webp"><img decoding="async" alt="{{$title}} {{$idx+1}}" src="{{$item['image']}}" style="width: 100%;"></source></picture>
                <h4>{{$item['title'] ?? ''}}</h4>
            </a>
        </div>
        @endforeach
    </div>
</section>
@inlineCss(css/sections/slider.css)
