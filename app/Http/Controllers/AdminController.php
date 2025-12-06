<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        $projectCount = Project::count();
        $messageCount = ContactMessage::count();

        $recentProjects = Project::latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'projectCount',
            'messageCount',
            'recentProjects',
            'recentMessages'
        ));
    }
}
