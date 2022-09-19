@props([
    'title' => 'Title',
    'is_slider' => false,
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
        <div id="services" class="{{$is_slider ? 'niema' : ''}}" style="{{$is_slider ? 'padding-top: 12vw; width: 84vw; position: relative; margin-left: auto; margin-right: auto; float: left; display: block; overflow: hidden; direction: ltr; cursor: -webkit-grab;' : ''}}">
            @foreach($items as $idx=>$item)
                @if($is_slider)
                    <div>
                @endif
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
                @if($is_slider)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/servicesSection.css)
