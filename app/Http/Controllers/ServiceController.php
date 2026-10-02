<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->get();

        return view('services.index', compact('services'));
    }

    /**
     * Laravel otomatis "find by slug" karena getRouteKeyName() di model Service.
     */
    public function show(Service $service)
    {
        abort_if(!$service->is_active, 404);
        return view('services.show', compact('service'));
    }
}
