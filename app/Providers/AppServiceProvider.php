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
use App\View\Components\Cards;
use App\View\Components\IndustryBenefitsSection;
use App\View\Components\Peculiarities;
use App\View\Components\RecrutingBenefits;
use App\View\Components\RecrutingContact;
use App\View\Components\RecrutingContacts;
use App\View\Components\RecrutingGallery;
use App\View\Components\RecrutingSkills;
use App\View\Components\RecrutingSteps;
use App\View\Components\RecrutingVacancies;
use App\View\Components\RecrutingValues;
use App\View\Components\TextImg;

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
        Blade::component('recruting-benefits', RecrutingBenefits::class);
        Blade::component('recruting-skills', RecrutingSkills::class);
        Blade::component('recruting-vacancies', RecrutingVacancies::class);
        Blade::component('recruting-values', RecrutingValues::class);
        Blade::component('recruting-steps', RecrutingSteps::class);
        Blade::component('recruting-gallery', RecrutingGallery::class);
        Blade::component('recruting-contact', RecrutingContact::class);
        Blade::component('recruting-contacts', RecrutingContacts::class);
        Blade::component('industry-benefits-section', IndustryBenefitsSection::class);
        Blade::component('peculiarities', Peculiarities::class);
        Blade::component('cards', Cards::class);
        Blade::component('text-img', TextImg::class);
    }
}
