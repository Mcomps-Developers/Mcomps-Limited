<?php

use App\Livewire\AboutComponent;
use App\Livewire\ContactComponent;
use App\Livewire\FaqComponent;
use App\Livewire\HomeComponent;
use App\Livewire\TeamComponent;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeComponent::class);
Route::get('/about-us',AboutComponent::class)->name('about');
Route::get('/contact-us',ContactComponent::class)->name('contact');
Route::get('faqs',FaqComponent::class)->name('faq');
Route::get('/team',TeamComponent::class)->name('team');
