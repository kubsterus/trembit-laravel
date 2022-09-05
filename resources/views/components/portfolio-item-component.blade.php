@props([
    'index' => ''
])
<section id="titleSection{{$index}}" class="titleSection">
    <div class="wrapper titleWrapper" id="titleWrapper">
        <div class="title">
            {{$content ?? ''}}
        </div>
    </div>
</section>
