<?php
namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        $relatedServices = Service::active()
                                  ->where('id', '!=', $service->id)
                                  ->take(3)->get();
        return view('services.show', compact('service', 'relatedServices'));
    }
}