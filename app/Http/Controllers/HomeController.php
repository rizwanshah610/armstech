<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogPost;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::onHome()->get();
        $portfolios = Portfolio::where('is_active', true)
                               ->where('is_featured', true)
                               ->latest()->take(6)->get();
        $posts = BlogPost::where('is_published', true)
                         ->latest('published_at')->take(3)->get();
        $testimonials = Testimonial::where('is_active', true)->get();

        return view('home', compact('services', 'portfolios', 'posts', 'testimonials'));
    }
}