@props([
    'title' => 'Page <br> Title',
    'image' => 'https://via.placeholder.com/300x200',
    'text' => 'section text',
    'btn' => [
        'href' => 'https://google.com',
        'text' => 'Btn text'
    ]
])
<section class="hero">
    <div class="container">
        <div class="hero__inner">
            <div class="hero__title-wrp">
                <h1 class="title hero__title">{!! $title !!}</h1>
                <div class="bg-img-overlay"><picture><source srcset="{{$image}}" type="image/webp"><img src="{{$image}}" alt="Background"></source></picture></div>
            </div>
            <div class="hero__desc-wrp">
                <p class="hero__desc">
                    {!! $text !!}
                </p>
                <a class="btn hero__btn" href="{{@$btn['href']}}">{{@$btn['text']}}</a>
            </div>
        </div>
    </div>
</section>
