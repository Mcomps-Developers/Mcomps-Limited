<?php

use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\BusinessContinuity;
use App\Livewire\CareersComponent;
use App\Livewire\ContactComponent;
use App\Livewire\DataCentreSolutions;
use App\Livewire\DigitalFinanceSolutions;
use App\Livewire\EventsComponent;
use App\Livewire\FaqComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ManagedItServices;
use App\Livewire\NetworkSolutions;
use App\Livewire\PortfolioComponent;
use App\Livewire\PricingComponent;
use App\Livewire\ProjectComponent;
use App\Livewire\SchoolSolutions;
use App\Livewire\Service1Component;
use App\Livewire\Service2Component;
use App\Livewire\Service3Component;
use App\Livewire\Service4Component;
use App\Livewire\SoftwareSolutions;
use App\Livewire\Solution1Component;
use App\Livewire\Solution2Component;
use App\Livewire\Solution3Component;
use App\Livewire\TeamComponent;
use App\Livewire\UnifiedCommunications;
use App\Livewire\WebSolutions;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeComponent::class);
Route::get('/about-us',AboutComponent::class)->name('about');
Route::get('/contact-us',ContactComponent::class)->name('contact');
Route::get('faqs',FaqComponent::class)->name('faq');
Route::get('/team',TeamComponent::class)->name('team');
Route::get('/pricing',PricingComponent::class)->name('pricing');
Route::get('/events',EventsComponent::class)->name('events');
Route::get('/careers',CareersComponent::class)->name('careers');
Route::get('/case-studies',PortfolioComponent::class)->name('portfolio');
Route::get('/project',ProjectComponent::class)->name('project');
Route::get('/SAAS-Development-Services',Service1Component::class)->name('service1');
Route::get('/UI/UX-design',Service2Component::class)->name('service2');
Route::get('/Mobile-app-development',Service3Component::class)->name('service3');
Route::get('/Cybersecurity',Service4Component::class)->name('service4');
Route::get('/AI',Solution1Component::class)->name('solution1');
Route::get('/Big-data',Solution2Component::class)->name('solution2');
Route::get('/IOT',Solution3Component::class)->name('solution3');
Route::get('/blogs',BlogComponent::class)->name('blogs');
Route::get('/Managed-I.T-Services',ManagedItServices::class)->name('manageditservices');
Route::get('/Unified-Communications',UnifiedCommunications::class)->name('unified.communications');
Route::get('/software-solutions',SoftwareSolutions::class)->name('software.solutions');
Route::get('/Web-solutions',WebSolutions::class)->name('web.solutions');
Route::get('/Network-solutions',NetworkSolutions::class)->name('network.solutions');
Route::get('/Data-center-solutions',DataCentreSolutions::class)->name('data.centre.solutions');
Route::get('/Business-continuity-and-cloud-services',BusinessContinuity::class)->name('business.continuity.and.cloud.services');
Route::get('/School-solutions',SchoolSolutions::class)->name('school.solutions');
Route::get('/Digital-Finance-Solutions',DigitalFinanceSolutions::class)->name('digital.finance.solutions');s
