@props([
    'title' => 'Services We Provide',
    'items' => [
        [
            'picture' => [
                'src' => 'view/images/hm/responsive.png',
                'alt' => 'Responsive',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/responsive.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Customized web and mobile development services',
            'content' => 'The range of services we offer is very wide. As a video streaming app development company, we provide efficient business solutions through the use of advanced technologies. Since we are always focused on providing a customized solution, the first step is always to get to know your company, goals and target audience.'
        ],
        [
            'picture' => [
                'src' => 'view/images/hm/web-design.png',
                'alt' => 'Web Design',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/web-design.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'UX and UI design',
            'content' => 'For any product, not only the availability of the necessary functions is important, but also the convenience of their use. The video streaming mobile app development is not only a technical part, but also a visual one. That\'s why our experienced design team creates intuitive interfaces and attractive designs for websites, as well as mobile and desktop applications.'
        ],
        [
            'picture' => [
                'src' => 'view/images/hm/web-maintenance.png',
                'alt' => 'Web Maintenance',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/web-maintenance.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Development and Maintenance',
            'content' => 'In addition to design, much attention is naturally paid to the technical component, which is the core of any application. As technology advances rapidly, Trembit&rsquo;s video streaming mobile app development team is constantly exploring new solutions and working to improve digital products with the latest technology. This approach results in innovative digital goods that function smoothly, quickly and without failures.'
        ],
        [
            'picture' => [
                'src' => 'view/images/hm/prototyping.png',
                'alt' => 'Prototyping',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/prototyping.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'Prototyping',
            'content' => 'Creating a prototype of a future application is an important step in video streaming app development. A clickable application model created by UX experts allows us to evaluate the convenience of the functionality and the possibility of its implementation using the available technology stack.'
        ],
        [
            'picture' => [
                'src' => 'view/images/hm/data-research.png',
                'alt' => 'Data research',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/data-research.webp',
                        'type' => 'image/webp',
                    ],
                ],
            ],
            'title' => 'R&amp;D',
            'content' => 'To create a high-quality digital product with further market launch, it is very important to conduct research and analysis of the chosen niche. In the course of R&amp;D, our experts study your industry in detail, determine the target audience, competitors, as well as identify the strengths and weaknesses of your company.'
        ],
        [
            'picture' => [
                'src' => 'view/images/hm/user-interface.png',
                'alt' => 'User interface',
                'srcset' => [
                    [
                        'link' => 'view/images/hm/user-interface.webp',
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
    <div class="sec-a-3-b">
        <div class="wrapper">
            <h2>{{$title}}</h2>
            @foreach ($items as $item)

            <div class="item-ap-k">
                <picture>
                    @foreach ($item['picture']['srcset'] as $set)
                        <source srcset="{{$set['link']}}" type="{{$set['type']}}">
                    @endforeach
                    <img alt="{{$item['picture']['alt']}}" src="{{$item['picture']['src']}}" ></source>
                </picture>
                <h3>{!! $item['title']!!}</h3>
                <p>{!! $item['content'] !!}</p>
            </div>
                
            @endforeach
            
        </div>
    </div>
</section>

@inlineCss(css/sections/sec-a-3.css)