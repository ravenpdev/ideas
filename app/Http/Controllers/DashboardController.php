<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $ideas = Idea::latest()->get();
        return view('dashboard.index', ['ideas' => $ideas]);
    }
}
