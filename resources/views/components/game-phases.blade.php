@props([
    'title' => 'Game Phases',
])
<section id="gamePhasesSection">
    <h2>{{$title}}</h2>
    <div id="game-container">
        <div id="picture-section">
            <span class="red-line" id="small-line"></span>
            <div id="picture-girl"></div>
            <span class="red-line" id="big-line">live</span>
        </div>
        <div class="info-part">
            @if ($content ?? false)
               {{$content}} 
            @endif
        </div>
    </div>
</section>
