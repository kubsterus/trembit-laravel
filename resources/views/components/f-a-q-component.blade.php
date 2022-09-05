@props([
    'title' => 'FREQUENTLY ASKED QUESTIONS',
    'items' => [
        [
            'question' => 'Test question 1',
            'answer' => 'Test Answer 1'
        ],
        [
            'question' => 'Test question 2',
            'answer' => 'Test Answer 2'
        ],
        [
            'question' => 'Test question 3',
            'answer' => 'Test Answer 3'
        ],
    ]
])
<section id="question">
    {!! \App\Helpers\LDJson::faq($items) !!}
    <div class="wrapper">
        <h2>{{$title}}</h2>
        @foreach($items as $item)
        <div class="accordion-box">
            <button class="accordion">{{$item['question']}}</button>
            <div class="panel">
                <p>{{$item['answer']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
