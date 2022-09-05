@props([
    'title'=>'Our Works',
    'items' => [
        [
            'title' => 'Work title',
            'subtitle' => '',
            'short_description' => 'Short Description',
            'description' => 'Description text',
            'highlight' => '',
            'image' => 'https://via.placeholder.com/800x600',
            'tags' => 'Tag 1, Tag 2, Tag 3'
        ]
    ]
])
<section id="workSection">
    <div class="wrapper">
        <h2>{{$title}}</h2>
        <div class="projects">
            @foreach($items as $idx=>$item)
                <div class="project {{!$idx || $idx%2==0 ? 'projectReverse' : ''}}">
                    <picture>
                        <source srcset="{{$item['image']}}" type="image/webp">
                            <img src="{{$item['image']}}" width="448" height="262" alt="{{$item['title']}}">
                        </source>
                    </picture>
                    <div class="projectDescription">
                        <h3>{!! $item['title'] !!}</h3>
                        <p><b>{!! $item['subtitle'] ?? $item['title'] !!}</b> {{$item['short_description']}}</p>
                        <p>
                            {!! $item['description'] !!}
                        </p>
                        @if($item['highlight'])
                        <p>
                            <a rel="nofollow" href="{{$item['highlight']['link']}}" class="highlight" target="_blank">
                                {!! $item['highlight']['title'] !!}
                            </a>
                        </p>
                        @endif
                        <p class="italic">{!! $item['tags'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/workSection.css)
