@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/trembivia.min.css)
@endsection
@section('content')
    <x-title-section>
        <x-slot name="title">

            <div id="logo-wrapper">
                <picture>
                    <source srcset="{{asset('view/images/logo_trembit.webp')}}" type="image/webp">
						<img src="{{asset('view/images/logo_trembit.png')}}" width="156" height="134" alt="Partners"></source>
                </picture>
                <span id="logo-sign">trembivia</span>
                <h1>Introducing Trembivia</h1>
        </x-slot>
        <x-slot name="underTitle"><p>A white-label interactive game show with a sub-second video streaming latency
            and scalability to literally millions of users. Trembivia brings truly unique solution for
            beloved shows, with a variety of games and mods to choose from. Comprehensive web-based console allows producer
            to run and customize show from head to toes.</p></x-slot>
    </x-title-section>
	<x-key-features>
		<x-slot name="content">
			<ul class="list-feature info-part">
				<li>White-label platform including IOS, Android and Web apps</li>
				<li>Split second delay video streaming system brings truly<br>
					simultaneous experience for each user</li>
				<li>Highly scalable server infrastructure</li>
				<li>Authentication via FB, Gmail, SMS</li>
				<li>Advanced game modes such as Survival, First to reach N points</li>
				<li>Multiple Language support</li>
				<li>Comprehensive producer web app grants extensive control over the show</li>
			</ul>
		</x-slot>
	</x-key-features>
	<x-game-phases>
		<x-slot name="content">
            <ul>
                <span class="list-title">Pre-Game</span>
                <li>Set Prize, customize push notifications</li>
                <li>Create Questions and Answers for each round</li>
                <li>Choose login type: social media, SMS or integrate your own SSO</li>
                <li>Schedule time for show to start</li>
                <li>Apply visual effects of your choice</li>
            </ul>
            <ul>
                <span class="list-title">Live</span>
                <li>Keep track on user activity for each question and answer</li>
                <li>Control the start of each question and show results</li>
                <li>Activate visual effects on demand</li>
                <li>Insert commercial between questions</li>
                <li>Post-game</li>
                <li>Exhibit today&rsquo;s game winners</li>
                <li>Diverse leaderboards per game type, episode and all time best.</li>
            </ul>
		</x-slot>
	</x-game-phases>
	<x-choose-from></x-choose-from>	
	<x-games-section></x-games-section>
	<x-scalability-section></x-scalability-section>
	<x-producer-section>
		<x-slot name="content">
            <ul>
                <li>Manage questions for each episode</li>
                <li>Control visual effects</li>
                <li>Change login type</li>
            </ul>
            <ul>
                <li>Review statistics per each game, question.</li>
                <li>Add push notification message</li>
                <li>Schedule games for months ahead</li>
            </ul>
		</x-slot>
	</x-producer-section>
	<x-blog-section></x-blog-section>
@endsection
