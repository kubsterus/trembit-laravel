@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/web-development.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>Web Development</h1>
            <p>Based on our immense experience, we offer starting the project with the discovery stage for better the Discovery stage to better uderstandig what the client whant to achiev and then to suggest options on achieving it with relevant options on how to achiev it using relevant technologies and approaches.<br> We create value driven and complex products</p>
            <picture><source srcset="{{asset('view/images/services/Web_development/1DES.webp')}}" type="image/webp"><img class="img-web1" src="{{asset('view/images/services/Web_development/1DES.png')}}" alt="line android"></source></picture>
            <picture><source srcset="{{asset('view/images/services/Web_development/222lINEdESKTOP.webp')}}" type="image/webp"><img class="img-web2" src="{{asset('view/images/services/Web_development/222lINEdESKTOP.webp')}}" alt="line iPhone"></source></picture>
        </x-slot>
    </x-title-section>
    <x-services-section title="Custom web application<br> development services" :items="
        [
            [
                'title' => 'Front-end development',
                'image' => asset('view/images/icon/web_development_1.1.svg'),
                'shadow_image' => asset('view/images/icon/shadow_purple.webp'),
                'list' => [
                    'User-centered UI design & software development',
                    'Accelerated Mobile/Web Pages',
                    'Progressive Web Applications',
                    'UI & JS animations'
                ]
            ],
            [
                'title' => 'Back-end development',
                'image' => asset('view/images/icon/web_development_1.2.svg'),
                'shadow_image' => asset('view/images/icon/shadow_light_blue.webp'),
                'list' => [
                    'Flexible approach to choose architecture (Microservice, Monolithic, etc )',
                    'Wide use of container-based architecture',
                    'Using best practices',
                    'Data engineering and AI'
                ]
            ],
            [
                'title' => 'Devops and cloud infrastructure',
                'image' => asset('view/images/icon/web_development_1.3.svg'),
                'shadow_image' => asset('view/images/icon/shadow_blue.webp'),
                'list' => [
                    'Cloud Solutions (AWS, Google, Azure, DigitalOcean,Hetzner)',
                    'Multi Cloud/Cloud agnostic approach',
                    'CI/CD',
                    'Log aggregation and analysis'
                ]
            ],
            [
                'title' => 'Web application development technologies',
                'image' => asset('view/images/icon/web_development_1.4.svg'),
                'shadow_image' => asset('view/images/icon/shadow_orange.webp'),
                'list' => [
                    'JS',
                    'Angular, React',
                    'NodeJS',
                    'Python'
                ]
            ],
        ]
    "></x-services-section>
    <x-service-features-section
        :left="[
            [
                'title'=>'Frontend development',
                'text' => 'The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?'
            ],
            [
                'title'=>'Backend development',
                'text' => 'We develop and maintain the code base that runs on the server ,receives requests from the clients, and contains the logic to send the appropriate data back to the client. Our back-end services include the creation and support of the database, server maintenance, architecture support and request-response logic.'
            ],
        ]"
        :right="[
            [
                'title'=>'Design and architecture',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ],
            [
                'title'=>'Development and maintenance',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ],
        ]"
    >
        <x-slot name="title">
            Web development
        </x-slot>
        <x-slot name="description">
            The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES" ></x-slider-section>
    <x-lets-us-section></x-lets-us-section>
@endsection
