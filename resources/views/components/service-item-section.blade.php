@props([
    'blocks' => [
        [
            'title' => 'H1 title',
            'image' => 'https://via.placeholder.com/400x300',
            'content' => [
                "It's hard to imagine the modern world without computers and laptops. Therefore,
                in our lives, we often use various types of desktop applications. For more effective work,
                you may need quick and easy applications.<br>
                Trembit provides custom software development services. We have a wide experience in developing
                desktop applications in various spheres. Applications that we developed are being used for
                access control, security software, provision of video streaming, salesforce integration platforms
                and games for cognitive training.<br>
                With cross-platform development, you are able to use desktop applications on different operation systems"
            ]
        ],
        [
            'title' => 'H2 title',
            'image' => 'https://via.placeholder.com/400x300',
            'content' => [
                'Its text with list',
                [
                    'Item 1',
                    'Item 2',
                    'Item 3'
                ]
            ]
        ]
    ]
])
<section id="servicesItemSection">
    <div class="wrapper servicesWrapper">
        <div id="services">
            @foreach($blocks as $idx => $block)
            @if(@$block['title'])
                @if(!$idx)
                    <h1>{{$block['title']}}</h1>
                @else
                    <h2>{{$block['title']}}</h2>
                @endif
            @endif
            <div class="service {{$idx!=0&&$idx%2!=0 ? 'serviceReverse' : ''}}">
                <picture><source srcset="{{$block['image']}}" type="image/webp"><img class="serviceImg" src="{{$block['image']}}" width="400" height="260" alt="serviceDescribe"></source></picture>
                <div class="serviceDescribe">
                    @foreach($block['content'] as $item)
                        @if(is_string($item))
                            <p>
                                {!! $item !!}
                            </p>
                        @endif
                        @if(is_array($item))
                            <ul>
                                @foreach($item as $line)
                                    <li>{{$line}}</li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/service-item-section.css)
