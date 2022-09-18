<?php

namespace App\Providers;

use App\View\Components\Benefits;
use App\View\Components\CaseSectionComponent;
use App\View\Components\ContactsSectionComponent;
use App\View\Components\FAQComponent;
use App\View\Components\Feedback;
use App\View\Components\FoundersSectionComponent;
use App\View\Components\HeroSection;
use App\View\Components\IndustryOverview;
use App\View\Components\LetsUsCenteredSectionComponent;
use App\View\Components\LetsUsSectionComponent;
use App\View\Components\LetsUsWithImage;
use App\View\Components\OurPlatform;
use App\View\Components\Partners;
use App\View\Components\PortfolioItemComponent;
use App\View\Components\ProjectOverviewComponent;
use App\View\Components\QNASection;
use App\View\Components\ServiceFeaturesSectionComponent;
use App\View\Components\ServiceItemSection;
use App\View\Components\ServicesSectionComponent;
use App\View\Components\ServicesWeProvide;
use App\View\Components\SliderSectionComponent;
use App\View\Components\SolutionProvideSectionComponent;
use App\View\Components\StatisticsSectionComponent;
use App\View\Components\TestComponent;
use App\View\Components\TitleSectionComponent;
use App\View\Components\IndustriesComponent;
use App\View\Components\WeCreate;
use App\View\Components\WhyBlock;
use App\View\Components\WorksSectionComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\KeyFeatures;
use App\View\Components\GamePhases;
use App\View\Components\ChooseFrom;
use App\View\Components\GamesSection;
use App\View\Components\ScalabilitySection;
use App\View\Components\ProducerSection;
use App\View\Components\BlogSection;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('inlineCss', function ($css_path){
            $css_full_path = public_path().'/'.$css_path;
            return "<style><?php include '$css_full_path'?></style>";
        });
        Blade::component('title-section', TitleSectionComponent::class);
        Blade::component('founders-section', FoundersSectionComponent::class);
        Blade::component('statistics-section', StatisticsSectionComponent::class);
        Blade::component('lets-us-section', LetsUsSectionComponent::class);
        Blade::component('lets-us-centered-section', LetsUsCenteredSectionComponent::class);
        Blade::component('contacts-section', ContactsSectionComponent::class);
        Blade::component('works-section', WorksSectionComponent::class);
        Blade::component('services-section', ServicesSectionComponent::class);
        Blade::component('service-features-section', ServiceFeaturesSectionComponent::class);
        Blade::component('slider-section', SliderSectionComponent::class);
        Blade::component('portfolio-item', PortfolioItemComponent::class);
        Blade::component('solutionprovide-section', SolutionProvideSectionComponent::class);
        Blade::component('project-overview-section', ProjectOverviewComponent::class);
        Blade::component('faq-section', FAQComponent::class);
        Blade::component('case-section', CaseSectionComponent::class);
        Blade::component('service-item-section', ServiceItemSection::class);
        Blade::component('industry-overview-section', IndustryOverview::class);
        Blade::component('industries-component', IndustriesComponent::class);
        Blade::component('we-create', WeCreate::class);
        Blade::component('services-we-provide', ServicesWeProvide::class);
        Blade::component('partners', Partners::class);
        Blade::component('our-platform', OurPlatform::class);
        Blade::component('benefits', Benefits::class);
        Blade::component('feedback', Feedback::class);
        Blade::component('why-block', WhyBlock::class);
        Blade::component('key-features', KeyFeatures::class);
        Blade::component('game-phases', GamePhases::class);
        Blade::component('choose-from', ChooseFrom::class);
        Blade::component('games-section', GamesSection::class);
        Blade::component('scalability-section', ScalabilitySection::class);
        Blade::component('producer-section', ProducerSection::class);
        Blade::component('blog-section', BlogSection::class);
        Blade::component('hero-section', HeroSection::class);
        Blade::component('qna-section', QNASection::class);
        Blade::component('lets-us-with-image', LetsUsWithImage::class);
    }
}
