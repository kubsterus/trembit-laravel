@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/rd.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">
            <h1>R &amp; D</h1>
            <p>Nowadays it is difficult to launch your digital product to the market without the market analysis and well written technical specification. We focus of detailed research of your industry, pros and cons of your company, as well as your competitors? to create high-quality software for startups and businesses that needs innovation</p>
            <img class="img-rd" src="view/images/services/RD/CENTEROFTHEBANNER.svg" alt="Software development kit">
            </div>
        </x-slot>
    </x-title-section>
    <x-services-section title="Research and development services" :items="
        [
            [
                'title' => 'Initial R&amp;D services',
                'image' => asset('view/images/icon/R&amp;D_1.1.svg'),
                'shadow_image' => asset('view/images/icon/shadow_light_blue.webp'),
                'list' => [
                    'Tech stack definition',
                    'Architecture overview',
                    'Technology verification through PoC creation',
                    'Competitor analysis',
                    'Market analysis',
                ]
            ],
            [
                'title' => 'Scope preparation services',
                'image' => asset('view/images/icon/R&amp;D_1.2.svg'),
                'shadow_image' => asset('view/images/icon/shadow_blue.webp'),
                'list' => [
                    'MVP user stories creation',
                    'WBS',
                    'Comprehensive Brief',
                    'Revised Value Proposition',
                    'List of Main Assumptions to Prove',
                    'Initial User Stories',
                ]
            ],
            [
                'title' => 'Product rationale services',
                'image' => asset('view/images/icon/R&amp;D_1.3.svg'),
                'shadow_image' => asset('view/images/icon/shadow_light_blue.webp'),
                'list' => [
                    'Complete User Stories',
                    'Key BPMN (Business Process Model &amp; Notation)',
                    'Tech Scope',
                    'Tech Spike',
                    'Business Model',
                    'Timelines',
                    'SRS',
                    'Estimation',
                ]
            ],
        ]
    "></x-services-section>
    <x-service-features-section
        :left="[
            [
                'title'=>'Pitch',
                'text' => 'The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?'
            ],
            [
                'title'=>'Immersive Session',
                'text' => 'Bringing all the results from our research, we meet with you to craft a rock-solid value proposition and set the main assumptions to prove. Then we create the first draft of the journey your users will take through your product. These initial user stories will help evaluate the features during the next step - Product Rationale. Outputs: Revised Value Proposition, List of Main Assumptions to Prove, Initial User Stories.'
            ],
        ]"
        :right="[
            [
                'title'=>'Description',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ],
            [
                'title'=>'Scope Preparation',
                'text' => 'In Trembit we build custom Android applications according to your specific business needs. With our mobile apps you will be able to solve complex business challenges through technologies, as well as spread your services across the globe and make it available for everyone just by using their phones.'
            ],
            [
                'title'=>'Product Rationale',
                'text' => 'At this point, we&rsquo;ll have all the information we need to create the ultimate list of User Stories and features necessary to prove the main assumptions in a Minimum Viable Product (MVP) or Proof of Concept (POC). Our experts in Product, UX/UI and Tech Architecture will focus on finding the answers to all of the questions raised throughout our journey together. Outputs: Complete User Stories, Key BPMN (Business Process Model &amp; Notation), Tech Scope, Tech Spike, Business Model.'
            ],
        ]"
    >
        <x-slot name="title">
            RND Research
        </x-slot>
        <x-slot name="description">
            The first step in developing any marketing program - whether traditional, digital or social - is to engage in the Discovery process. This process essentially describes the research that we implement and the concepts that we draw on to answer these three primary questions. 1) Who ? Who is your target market? Or target markets? 2) What message(s) do we want to send to these people? 3) How? What are the most effective methods for delivering this message to this target market?
        </x-slot>
    </x-service-features-section>
    <x-slider-section title="FEATURED CASE STUDIES"></x-slider-section>

    <x-lets-us-section></x-lets-us-section>

@endsection
