@props([
    'title' => 'Title',
    'items' => [
        [
            'title' => 'Service Title',
            'image' => 'https://via.placeholder.com/200',
            'shadow_image' => 'https://via.placeholder.com/150',
            'list' => [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4'
            ]
        ]
    ]
])
<section id="servicesSection">
    <div class="wrapper servicesWrapper">
        <h2 class="title">{!! $title !!}</h2>
        <div id="services">
            @foreach($items as $idx=>$item)
            <div class="block-3c">
                <div class="service">
                    <div class="img-div-i">
                        <img src="{{$item['image']}}" alt="Webinars platforms">
                        <picture><source srcset="{{$item['shadow_image'] ?? ''}}" type="image/webp"><img src="{{$item['shadow_image'] ?? ''}}" alt="{{$item['title']}} {{$idx+1}}"></source></picture>
                    </div>
                    <h4>{{$item['title']}}</h4>
                    <ul>
                        @foreach($item['list'] as $list_e)
                            <li>{{$list_e}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/servicesSection.css)
