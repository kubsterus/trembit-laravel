@props([
    'title' => 'Why title',
    'subtitle' => '',
    'items' => [],
    'image' => 'https://via.placeholder.com/400x300'
])
<section class="gr-s-l">
    <div class="wrapper">
        <div class="block-6c">
            <h2>{{$title}}</h2>
            <p>{{$subtitle}}</p>
            @if($items)
                <ul>
                    @foreach($items as $item)
                        <li>
                            @if(count($item) == 2)
                            <em>{{$item[0]}}</em> <br>
                            @endif
                            <span>{{$item[1] ?? $item[0]}}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="block-4c">
            <picture><source srcset="{{$image}}" type="image/webp"><img src="{{$image}}" alt="heart"></source></picture>
        </div>
    </div>
</section>
@inlineCss(css/sections/gr-s-l.css)
