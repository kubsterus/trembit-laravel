@extends('skeleton')

@section('critical_styles')
	{{-- @inlineCss(css/industries.video-conferencing.css) --}}
    @inlineCss(css/entertainment.min.css)
@endsection
@section('content')
    <x-hero-section title="White-label video conferencing and webinar platform" :image="asset('img/hero/03.webp')"
        text="A white-label video conferencing app is an option for those who need a quality online event solution focusing on their brand and reputation. By purchasing ready-made software from a white label provider, you get rid of the need to wait for the completion of durable and costly development."
        :btn="[
            'href' => '/contacts.html',
            'text' => 'Get in touch',
        ]"
    >
        <x-slot name="content">
            <p class="hero__desc">A white-label video conferencing app is an option for those who need a quality online event solution focusing on their brand and reputation. By purchasing ready-made software from a white label provider, you get rid of the need to wait for the completion of durable and costly development.</p>
        </x-slot>
    </x-hero-section>
    <x-industry-benefits-section
        title="Advantages Of White-Label<br>Video Conferencing<br>Platform" 
        colsCount="3"
        :image="[
            'src' => asset('../img/benefits/desktops.png'),
            'alt' => 'Saves time and money',
            'srcset' => [
                [
                    'link' => asset('../img/benefits/desktops.webp'),
                    'type' => 'image/webp'
                ]
            ]
        ]"
        :items="[
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/07.png'),
                    'alt' => 'Saves time and money',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/07.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Saves time and money',
                'content' => 'A white-label software is an almost completed product where the final touch is applying your corporate designThis means you do not need to create a video conferencing platform from scratch, spending time and money on research and development, but focus on its promotion.'
            ],
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/08.png'),
                    'alt' => 'Increases your brand awareness',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/08.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Increases your brand awareness',
                'content' => 'Putting your logo and branded design on the white-label video conferencing platform will raise public awareness of your company. Using your corporate platform for online meetings will increase the importance of your company in the eyes of partners or potential clients.'
            ],
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/09.png'),
                    'alt' => 'Gives you an edge over your competitors',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/09.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Gives you an edge over your competitors',
                'content' => 'If your competitors use third-party video conferencing services, imagine how you will stand out from their background with your own software.'
            ],
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/10.png'),
                    'alt' => 'Ensures quality and safety',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/10.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Ensures quality and safety',
                'content' => 'A white-label software development equals using modern and reliable technologies that provide you with high-quality communication and the ability to share content safely.'
            ],
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/11.png'),
                    'alt' => 'Increases customer loyalty',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/11.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Increases customer loyalty',
                'content' => 'Create alignment between your products and offerings. In addition, using a white-label video conferencing platform that performs well and promotes a positive user experience means that customers will associate high-quality, user-friendly technology with your brand.'
            ],
            [
                'image' => [
                    'src' => asset('../img/benefits/icons/12.png'),
                    'alt' => 'Integrability',
                    'srcset' => [
                        [
                            'link' => asset('../img/benefits/icons/12.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Integrability',
                'content' => 'Ready-made services can be easily adapted and implemented on existing platforms. For example, in billing or service delivery systems.'
            ],
        ]"
    ></x-industry-benefits-section>
    <x-solutions></x-solutions>
    <x-peculiarities
        title="Our White Label Video Conferencing Software For:"
        :items="[
            [
                'image' => [
                    'src' => asset('../img/peculiarities/08.png'),
                    'alt' => 'Telemedicine',
                    'srcset' => [
                        [
                            'link' => asset('../img/peculiarities/08.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Telemedicine',
                'content' => 'Solutions that improve the quality of healthcare by connecting patients and healthcare professionals anytime, anywhere.'
            ],
            [
                'image' => [
                    'src' => asset('../img/peculiarities/09.png'),
                    'alt' => 'Educational Institutions',
                    'srcset' => [
                        [
                            'link' => asset('../img/peculiarities/09.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Educational Institutions',
                'content' => 'Solutions that improve the quality of education by enabling lectures, webinars, consultations, and even online learning.'
            ],
            [
                'image' => [
                    'src' => asset('../img/peculiarities/10.png'),
                    'alt' => 'Business Institution',
                    'srcset' => [
                        [
                            'link' => asset('../img/peculiarities/10.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Business Institution',
                'content' => 'Solutions that will improve the productivity, management of your employees, and communication.'
            ],
            [
                'image' => [
                    'src' => asset('../img/peculiarities/11.png'),
                    'alt' => 'Government Agencies',
                    'srcset' => [
                        [
                            'link' => asset('../img/peculiarities/11.webp'),
                            'type' => 'image/webp'
                        ]
                    ]
                ],
                'title' => 'Government Agencies',
                'content' => 'Solutions that guarantee high-quality and, most importantly, secure communication will allow you to conduct online meetings and instantly share images from IP cameras.'
            ],
        ]" 
    ></x-peculiarities>
    <x-technologies></x-technologies>
	@include('sections.industries.video-conferencing.text-img')
	@include('sections.industries.video-conferencing.cases')
    <x-feedback></x-feedback>
    <x-qna-section :items="[
        [
            'question' => 'How does video conference white-labeling work?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
        [
            'question' => 'What are the options for customizing your white-label webinar platform?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
        [
            'question' => 'Do you develop White-label conferencing solutions from scratch?',
            'answer' => 'The developer company creates a platform for video conferencing without labeling it with its own name. Another company buys the product, labels it under their own name, designs it, and sells it or uses it for their business needs.<br> Such cooperation is beneficial for both parties to the transaction. A company that has purchased a white label product increases public awareness of itself, builds up a client audience and receives additional profit. The developer creates a product with a low cost, minimizes the costs of marketing and advertising, and payment for the services of related specialists.<br>Contact us to see how white labeling works in practice.'
        ],
    ]"></x-qna-section>
	<x-lets-us-section></x-lets-us-section>

@endsection
