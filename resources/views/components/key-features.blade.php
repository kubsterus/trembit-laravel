@props([
    'button' => [
        'label' => 'Request a Demo',
        'link' => 'mailto:welcome@trembit.com'
    ],
    'title' => 'Key Features',
])
<section id="keyFeaturesSection">
    <div id="request-demo">
        <a class="link-demo" href="{{$button['link']}}">{{$button['label']}}</a>
        <span id="border-demo"></span>
    </div>
    <h2>{{$title}}</h2>
    @if ($content ?? false)
        {{$content}}    
    @endif
    <div id="phone-1-shadow">
        <div id="phone-1"></div>
    </div>
</section>
