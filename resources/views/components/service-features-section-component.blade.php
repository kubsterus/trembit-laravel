@props([
    'left' => [
        [
            'title' => 'Left row title',
            'text' => 'Left row text',
        ]
    ],
    'right' => [
        [
            'title' => 'Right row title 1',
            'text' => 'Right row text 1'
        ],
        [
            'title' => 'Right row title 2',
            'text' => 'Right row text with top space 2',
            'top_space' => false
        ]
    ]
])
<section id="sec-a-3">
    <div class="sec-a-3-b">
        <div class="wrapper">
            <div class="block-2c">
                <h2>{!! $title ?? '' !!}</h2>
                <p class="main-p">{!! $description ?? '' !!}</p>
                @foreach($left as $item)
                    <h3 class="{{($item['top_space'] ?? false) ? 'sec-2c' : ''}}">{{$item['title']}}</h3>
                    <p>{{$item['text']}}</p>
                @endforeach
            </div>
            <div class="block-2c">
                @foreach($right as $item)
                    <h3 class="{{($item['top_space'] ?? false) ? 'sec-2c' : ''}}">{{$item['title']}}</h3>
                    <p>{{$item['text']}}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
