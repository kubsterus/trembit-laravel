@props([
    'video'
])
<section id="titleSection">
    @if($video ?? false)
        @if($video->attributes['desktop'] ?? false)
            <video class="vs-1 desktop" autoplay muted loop id="myVideo" style="position: absolute;right: 0;top: 0;width:100%;min-width: 100%;min-height: 100%;">
                <source src="{{$video->attributes['desktop']}}" type="video/mp4">
                </source>
            </video>
        @endif
        @if($video->attributes['mobile'] ?? false)
            <video class="vs-1 mob" autoplay muted loop id="myVideo2" style="position: absolute;right: 0;top: 0;width:100%;min-width: 100%;min-height: 100%;">
                <source src="{{$video->attributes['mobile']}}" type="video/mp4">
                </source>
            </video>
        @endif
    @endif
    @if($title ?? false)
        <div class="wrapper" id="titleWrapper">
            <div id="title">
                {{$title}}
            </div>
            @if($underTitle ?? false)
                {{$underTitle}}
            @endif
        </div>
    @endif

    @if($img ?? false)
        @if($img->attributes['src'] ?? false)
            <div>
                <img alt="Page not found" title="Page not found" src="{{$img->attributes['src']}}">
            </div>
        @endif
    @endif
</section>
@inlineCss(css/sections/titleSection.css)
