<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminContactUsController;
use App\Http\Controllers\AdminCTAController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProjectsController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminServicesDetailsController;
use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('admin.already.logged.in')->group(function () {
        Route::get('/login', [AuthLoginController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthLoginController::class, 'login'])->name('login.post');
        Route::get('/register', [AuthLoginController::class, 'showRegister'])->name('register');
        Route::post('/register', [AuthLoginController::class, 'register'])->name('register.post');
    });

    Route::middleware('admin.auth')->group(function () {
        Route::get('/cta', [AdminCTAController::class, 'showCTA'])->name('cta');
        Route::get('/contact', [AdminContactController::class, 'showContact'])->name('contact');


        Route::get('dashboard', [AdminHomeController::class, 'showDashboard'])->name('dashboard');
        Route::get('/home', [AdminHomeController::class, 'home'])->name('home');
        Route::get('/about', [AdminAboutController::class, 'showAbout'])->name('about');
        Route::get('/services', [AdminServicesController::class, 'showServices'])->name('services');
        Route::get('/services-details', [AdminServicesDetailsController::class, 'showServicesDetails'])->name('services.details');
        Route::get('/projects', [AdminProjectsController::class, 'showProjects'])->name('projects');
        Route::get('/faq', [AdminFaqController::class, 'showFaq'])->name('faq');
        Route::get('/contact-us', [AdminContactUsController::class, 'showContactUs'])->name('contact.us');

        // Logout
        Route::post('/logout', [AuthLoginController::class, 'logout'])->name('logout');

        // CTA Updation
        Route::post('/cta', [AdminCTAController::class, 'update'])->name('cta.update');

        // Contact Updation
        Route::post('/contact', [AdminContactController::class, 'update'])->name('contact.update');

        // Home Updation
        Route::post('/home', [AdminHomeController::class, 'update'])->name('home.update');

        // About Updation
        Route::post('/about', [AdminAboutController::class, 'update'])->name('about.update');

        // Services Updation
        Route::post('/services', [AdminServicesController::class, 'update'])->name('services.update');

        // Services Details Updation
        Route::post('/service-details', [AdminServicesDetailsController::class, 'update'])->name('service.details.update');

        // Projects Updation
        Route::post('/projects', [AdminProjectsController::class, 'update'])->name('projects.update');

        // Faq Updation
        Route::post('/faq', [AdminFaqController::class, 'update'])->name('faq.update');

        // Contact Us Updation
        Route::post('/contact-us', [AdminContactUsController::class, 'update'])->name('contact.us.update');
    });

});

// Frontend Routes
Route::redirect('/', 'home');
Route::get('home', [HomeController::class, 'home'])->name('frontend.home');
Route::get('about', [AboutController::class, 'about'])->name('frontend.about');
Route::get('services', [ServicesController::class, 'services'])->name('frontend.services');
Route::get('serviceDetails', [ServiceDetailsController::class, 'serviceDetails'])->name('frontend.serviceDetails');
Route::get('projects', [ProjectsController::class, 'projects'])->name('frontend.projects');
Route::get('faq', [FaqController::class, 'faq'])->name('frontend.faq');
Route::get('contactUs', [ContactUsController::class, 'contactUs'])->name('frontend.contactUs');