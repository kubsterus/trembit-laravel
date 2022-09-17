@props([
    'title' => 'Producer web app',
    'subTitle' => 'Hosting has never been that easy. With a completer all-in-one admin web app,
            you are welcome to grab a full control of your show.',

])
<section id="producerSection">
    <div class="wrapper">
        <h3>{{$title}}</h3>
        <p>{{$subTitle}}</p>
        <div id="lists-container">
            @if ($content ?? false)
               {{$content}} 
            @endif
        </div>
    </div>
</section>
