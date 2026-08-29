<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;

// ─────────────────────────────────────────
// HOME
// ─────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ─────────────────────────────────────────
// STATIC PAGES
// ─────────────────────────────────────────
Route::get('/about',   fn() => view('about'))->name('about');
Route::get('/team',    fn() => view('team'))->name('team');
Route::get('/faq',     fn() => view('faq'))->name('faq');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

// ─────────────────────────────────────────
// SERVICES
// ─────────────────────────────────────────
Route::get('/services',           [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// ─────────────────────────────────────────
// PORTFOLIO
// ─────────────────────────────────────────
Route::get('/portfolio',             [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio.show');

// ─────────────────────────────────────────
// BLOG
// ─────────────────────────────────────────
Route::get('/blog',        [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// ─────────────────────────────────────────
// CONTACT
// ─────────────────────────────────────────
Route::get('/contact',  [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// ─────────────────────────────────────────
// NEWSLETTER (footer subscribe form)
// ─────────────────────────────────────────
Route::post('/newsletter', function (\Illuminate\Http\Request $request) {
    $request->validate(['email' => 'required|email']);
    return back()->with('newsletter_success', 'Thank you for subscribing!');
})->name('newsletter.subscribe');