@props([
    'title' => 'Industry overview image',
    'image' => 'https://via.placeholder.com/300x200',
    'items' => [
        [
            'title' => 'Title 1',
            'text' => 'Text 1',
            'icon' => 'https://via.placeholder.com/300x200',
        ],
        [
            'title' => 'Title 2',
            'text' => 'Text 2',
            'icon' => 'https://via.placeholder.com/300x200',
        ],
        [
            'title' => 'Title 3',
            'text' => 'Text 3',
            'icon' => 'https://via.placeholder.com/300x200',
        ],
        [
            'title' => 'Title 4',
            'text' => 'Text 4',
            'icon' => 'https://via.placeholder.com/300x200',
        ],
    ]
])
<section class="dating-app">
    <div class="wrapper">
        <h2>{{$title}}</h2>
        <picture><source srcset="{{$image}}" type="image/webp"><img class="mob" src="{{$image}}" alt="Notebook"></source></picture>
        @foreach($items as $item)
        <div class="item-dat">
            <div class="img-d">
                @if(@$item['icon'])
                    <picture><source srcset="{{@$item['icon']}}" type="image/webp"><img alt="data research" src="{{@$item['icon']}}"></source></picture>
                @endif
            </div>
            <div class="tet-block-d">
                <h3>{{@$item['title']}}</h3>
                <p>
                    {!! @$item['text'] !!}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
