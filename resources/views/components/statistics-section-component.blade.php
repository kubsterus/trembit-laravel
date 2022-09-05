@props(['title' => 'Statistics', 'items' => []])
<section id="staticticsSection">
    <div>
        <h2 class="stat-h">{{$title}}</h2>
        <div id="staticts">
            @foreach($items as $item)
            <div class="statistic">
                <picture><source srcset="{{$item['image']}}" type="image/webp"><img src="{{$item['image']}}" alt="{{$item['title']}}"></source></picture>
                <h2>{{$item['value']}}</h2>
                <p>{{$item['title']}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
