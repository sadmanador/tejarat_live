<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ExportController extends Controller
{
    public function index()
    {
        return Inertia::render('Exports/Index');
    }

    public function about()
    {
        return Inertia::render('Exports/About');
    }

    public function message()
    {
        return Inertia::render('Exports/Message');
    }

    public function partner()
    {
        return Inertia::render('Exports/Partner');
    }

    public function profile()
    {
        return Inertia::render('Exports/Profile');
    }

    public function services()
    {
        return Inertia::render('Exports/Services');
    }
}
