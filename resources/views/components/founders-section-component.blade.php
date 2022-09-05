@props([
    'founders'
])
<section id="foundersSection">
    <div class="wrapper">
        <div id="founders">
            @foreach($founders as $founder)
                <div class="founder">
                    <div style="background-image: url(./view/images/svg/Grren.svg);">
                        <picture><source srcset="{{$founder['photo']}}" type="image/webp"><img class="mirror" src="{{$founder['photo']}}" alt="{{$founder['name']}}"></source></picture>
                        <h6>{{$founder['name']}}</h6>
                        <p class="prt">{{$founder['position']}}</p>
                        <blockquote>
                            "{{$founder['quote']}}"
                        </blockquote>
                        <div style="padding: 0px 10px 45px 40px; display: flex;">
                            <a href="{{$founder['linkedin']}}"><img src="view/images/linkedin.svg" alt="LinkedIn" style="padding-right: 10px;">LinkedIn</a>
                            <a href="mailto:{{$founder['email']}}" style="padding-left: 20px;"><img src="view/images/mail.svg" alt="Mail" style="padding-right: 10px;">{{$founder['email']}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@inlineCss(css/sections/foundersSection.css)
