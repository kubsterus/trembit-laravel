@props([
    'title' => 'Services We Provide',
    'subtitle' => '',
    'items' => [
        [
            'picture' => [
                'src' => asset('view/images/hm/responsive.png'),
                'alt' => 'Responsive',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/responsive.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Customized web and mobile development services',
            'content' => 'The range of services we offer is very wide. As a video streaming app development company, we provide efficient business solutions through the use of advanced technologies. Since we are always focused on providing a customized solution, the first step is always to get to know your company, goals and target audience.'
        ],
        [
            'picture' => [
                'src' => asset('view/images/hm/web-design.png'),
                'alt' => 'Web Design',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/web-design.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'UX and UI design',
            'content' => 'For any product, not only the availability of the necessary functions is important, but also the convenience of their use. The video streaming mobile app development is not only a technical part, but also a visual one. That\'s why our experienced design team creates intuitive interfaces and attractive designs for websites, as well as mobile and desktop applications.'
        ],
        [
            'picture' => [
                'src' => asset('view/images/hm/web-maintenance.png'),
                'alt' => 'Web Maintenance',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/web-maintenance.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Development and Maintenance',
            'content' => 'In addition to design, much attention is naturally paid to the technical component, which is the core of any application. As technology advances rapidly, Trembits video streaming mobile app development team is constantly exploring new solutions and working to improve digital products with the latest technology. This approach results in innovative digital goods that function smoothly, quickly and without failures.'
        ],
        [
            'picture' => [
                'src' => asset('view/images/hm/prototyping.png'),
                'alt' => 'Prototyping',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/prototyping.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Prototyping',
            'content' => 'Creating a prototype of a future application is an important step in video streaming app development. A clickable application model created by UX experts allows us to evaluate the convenience of the functionality and the possibility of its implementation using the available technology stack.'
        ],
        [
            'picture' => [
                'src' => asset('view/images/hm/data-research.png'),
                'alt' => 'Data research',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/data-research.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'R&D',
            'content' => 'To create a high-quality digital product with further market launch, it is very important to conduct research and analysis of the chosen niche. In the course of R&D, our experts study your industry in detail, determine the target audience, competitors, as well as identify the strengths and weaknesses of your company.'
        ],
        [
            'picture' => [
                'src' => asset('view/images/hm/user-interface.png'),
                'alt' => 'User interface',
                'srcset' => [
                    [
                        'link' => asset('view/images/hm/user-interface.webp'),
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Application Modernization',
            'content' => 'In addition to building applications and platforms for your business from the ground up, Trembit specialists offer services to modernize legacy applications. This approach will help you avoid costs that would be much higher in case of video streaming mobile app development from scratch, and help you stay competitive in times of changes.'
        ],
    ]
])
<section id="sec-a-3">
    <div class="sec-a-3-b sec-a-3-b--no-img">
        <div class="wrapper">
            <h2>{{$title}}</h2>
            @if($subtitle)
                <p>{{$subtitle}}</p>
            @endif
            @foreach ($items as $item)
            <div class="item-ap-k">
                <picture>
                    @if(is_array($item['picture']))
                        @foreach ($item['picture']['srcset'] as $set)
                            <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                        @endforeach
                        <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}" ></source>
                    @else
                        <source srcset="{{$item['picture']}}">
                        <img src="{{$item['picture']}}" ></source>
                    @endif
                </picture>
                <h3>{!! $item['title']!!}</h3>
                <p>{!! $item['content'] !!}</p>
            </div>

            @endforeach

        </div>
    </div>
</section>

@inlineCss(css/sections/sec-a-3.css)
