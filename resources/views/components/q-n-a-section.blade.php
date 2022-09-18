@props([
    'title' => 'Frequently asked questions',
    'items' => [
        [
            'question' => 'Q1',
            'answer' => 'A1'
        ],
        [
            'question' => 'Q2',
            'answer' => 'A2'
        ],
        [
            'question' => 'Q3',
            'answer' => 'A3'
        ],
    ]
])
<section class="qna">
    <div class="container">
        <h2 class="title title_black">{{$title}}</h2>
        <div class="qna__row">
            @foreach($items as $item)
                <div class="accordion">
                    <div class="accordion__head">
                        <h3 class="accordion__title">{{$item['question']}}</h3>
                        <svg class="accordion__icon" viewbox="0 0 448 512">
                            <path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path>
                        </svg>
                    </div>
                    <div class="accordion__content">
                        <p>
                            {{$item['answer']}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
