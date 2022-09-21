@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/trembivia.min.css)
@endsection
@section('content')
        <section id="titleSection">
            <div class="wrapper" id="titleWrapper">
                <div id="title">
                    <div id="logo-wrapper">
                    <picture><source srcset="view/images/logo_trembit.webp" type="image/webp"><img src="view/images/logo_trembit.png" width="156" height="134" alt="Partners"></picture>
                    <span id="logo-sign">trembivia</span>
                    </div>
                    <h1>Introducing Trembivia,</h1>
                    <p>A white-label interactive game show with a sub-second video streaming latency
                        and scalability to literally millions of users. Trembivia brings truly unique solution for
                        beloved shows, with a variety of games and mods to choose from. Comprehensive web-based console allows producer to run and customize show from head to toes.
                    </p>
                </div>
            </div>
        </section>

        <section id="keyFeaturesSection">
            <!--<div class="wrapper">-->
                <div id="request-demo">
                    <a class="link-demo" href="mailto:welcome@preview.trembit.com">Request a Demo</a>
                    <span id="border-demo"></span>
                </div>
                <h2>Key Features</h2>
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
                <div id="phone-1-shadow">
                    <div id="phone-1"></div>
                </div>
            <!--</div>-->
        </section>

        <section id="gamePhasesSection">
            <h2>Game Phases</h2>
            <div id="game-container">
                <div id="picture-section">
                    <span class="red-line" id="small-line"></span>
                    <div id="picture-girl"></div>
                    <span class="red-line" id="big-line">live</span>
                </div>
                <div class="info-part">
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
                        <li>Exhibit today’s game winners</li>
                        <li>Diverse leaderboards per game type, episode and all time best.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="chooseFromSection">
                <h3>What we choose from:</h3>
                <div id="layer-2"></div>
                <div id="log-in-type">
                    <span>Log in type</span>
                    <span id="facebook-icon" class="log-icon"></span>
                    <span id="email-icon" class="log-icon"></span>
                    <span id="google-icon" class="log-icon"></span>
                    <span id="phone-icon" class="log-icon"></span>
                </div>
                <div id="layer-3"></div>
                <div id="mobile-section">
                    <div class="mobile-part" id="second-part">
                        <span>Numerous amount<br> of themes</span>
                        <div class="mobile-1" id="screen-1"></div>
                        <div class="mobile-2" id="screen-2"></div>
                        <div class="mobile-3" id="screen-3"></div>
                    </div>
                    <div class="mobile-part" id="first-part">
                        <span>Different games<br> and modes</span>
                        <div class="mobile-1" id="screen-4"></div>
                        <div class="mobile-2" id="screen-5"></div>
                        <div class="mobile-3" id="screen-6"></div>
                    </div>
                </div>
        </section>

        <section id="gamesSection">
            <div class="wrapper">
                <h3>Games</h3>
                <div id="games-container">
                    <div class="game-part">
                        <span class="game-icon" id="trivia-icon"></span>
                        <h5>Trivia</h5>
                        <p>Classic<br>Survival<br>Points based</p>
                    </div>
                    <div class="game-part">
                        <span class="game-icon" id="melody-icon"></span>
                        <h5>Guess a melody</h5>
                        <p>Classic<br>Survival<br>Points based</p>
                    </div>
                    <div class="game-part">
                        <span class="game-icon" id="casino-icon"></span>
                        <h5>Interactive Casino games</h5>
                        <p>Black jack<br>Roulette<br>Craps</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="scalabilitySection">
            <div class="wrapper">
                <div class="info-part">
                    <h3>Scalability and stability</h3>
                    <p>A truly scalable server infrastructure allows to hold millions of users with a sub-second delay.
                        Partnering with Red5PRO leads to sub-300 ms video latency to complement real-time interactions.
                        Data synchronization with video brings a new level to stats analysis.</p>
                </div>
                    <div class="phone-2"></div>
            </div>
        </section>

        <section id="producerSection">
            <div class="wrapper">
                <h3>Producer web app</h3>
                <p>Hosting has never been that easy. With a completer all-in-one admin web app,
                    you are welcome to grab a full control of your show.</p>
                <div id="lists-container">
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
                </div>
            </div>
        </section>

        <section id="blogSection">
                <h3 id="blog-title">Blog</h3>
                <div class="text-container">
                    <a href="https://preview.trembit.com/blog/hq-trivia-software-architecture/" target="_blank">
                        <picture><source srcset="view/images/trembivia/image-blog1.webp" type="image/webp"><img src="view/images/trembivia/image-blog1.jpg" width="320" height="200" alt="Image blog 1"></picture>
                        <h5>HQ Trivia software architecture</h5>
                    </a>
                    <a href="https://preview.trembit.com/blog/hq-trivia-business-model-how-much-do-they-get/" target="_blank">
                        <picture><source srcset="view/images/trembivia/image-blog2.webp" type="image/webp"><img src="view/images/trembivia/image-blog2.jpg" width="280" height="200" alt="Image blog 1"></picture>
                        <h5>HQ Trivia business model, how much $$$ do they get?</h5>
                    </a>
                </div>
                <div>
                    <a class="link-demo" href="https://preview.trembit.com/blog/" target="_blank">All</a>
                </div>
        </section>
@endsection
