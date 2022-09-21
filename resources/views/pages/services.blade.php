@extends('skeleton')

@section('critical_styles')
	@inlineCss(css/services.css)
@endsection
@section('content')
<section id="titleSection">
	<div class="wrapper" id="titleWrapper">
		<div id="title">
			<h1>Services</h1>
			<p>Trembit has been developing specialty software solutions since 2009. Here are some of our strengths</p>
		</div>
	</div>
</section>

<section id="servicesSection">
	<div class="wrapper servicesWrapper">
		<div id="services">
			<div class="serviceLink">
				<div class="service">
					<img src="view/images/services/webinar.svg" width="140" height="140" alt="Webinars platforms">
					<p>Webinars platforms</p>
				</div>
			</div>
			<div class="serviceLink">
				<div class="service">
					<img src="view/images/services/remote.svg" width="140" height="140" alt="Video conferencing">
					<p>Video conferencing</p>
				</div>
			</div>
			<div class="serviceLink">
				<div class="service">
					<img src="view/images/services/messenger.svg" width="140" height="140" alt="Internet Messengers">
					<p>Internet Messengers</p>
				</div>
			</div>
			<div class="serviceLink">
				<div class="service">
					<img src="view/images/services/dating.svg" width="140" height="140" alt="Dating Platforms">
					<p>Dating Platforms</p>
				</div>
			</div>
			<div class="serviceLink">
				<div class="service">
					<img src="view/images/services/talk-show.svg" width="140" height="140" alt="Interactive Shows">
					<p>Interactive Shows</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection