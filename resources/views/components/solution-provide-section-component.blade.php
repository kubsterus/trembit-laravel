@props([
    'title' => 'Solution provide title',
    'logo' => 'https://placeholder.com/300x200',
    'logo_big' => 'https://placeholder.com/600x400',
    'list' => [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4'
    ],
    'btn' => [
        'link' => '#',
        'text' => ''
    ]
])
<section id="solutionprovide">
    <div class="wrapper">
        <div id="title">
            <h2>{{$title}}</h2>
            <picture><source srcset="{{$logo}}" type="image/webp"><img src="{{$logo}}" style="max-width:207px;" alt="logo"></source></picture>
            <picture><source srcset="{{$logo_big}}" type="image/webp"><img class="img-m" src="{{$logo_big}}" style="width: 100%;padding: 15px 0px;" alt="logo"></source></picture>
            <ul class="last">
                @foreach($list as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
            @if($btn['text'] ?? false)
                <a href="{{$btn['link'] ?? ''}}" class="submit-b">{{$btn['text']}}</a>
            @endif
        </div>
    </div>
</section>
@inlineCss(css/sections/solutionprovide.css)
