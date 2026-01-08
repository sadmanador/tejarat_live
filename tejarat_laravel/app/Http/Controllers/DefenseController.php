<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DefenseController extends Controller
{
    public function index()
    {
        return Inertia::render('Defense/Index');
    }

    public function about()
    {
        return Inertia::render('Defense/About');
    }

    public function message()
    {
        return Inertia::render('Defense/Message');
    }

    public function partner()
    {
        return Inertia::render('Defense/Partner');
    }

    public function profile()
    {
        return Inertia::render('Defense/Profile');
    }

    public function services()
    {
        return Inertia::render('Defense/Services');
    }
}
