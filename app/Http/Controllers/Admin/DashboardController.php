<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects_total' => Project::count(),
            'projects_published' => Project::where('is_published', true)->count(),
            'students_total' => User::where('role', User::ROLE_STUDENT)->count(),
            'admins_total' => User::where('role', User::ROLE_ADMIN)->count(),
        ];

        $recentProjects = Project::orderBy('created_at', 'desc')->take(5)->get();
        $recentStudents = User::where('role', User::ROLE_STUDENT)->orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentProjects', 'recentStudents'));
    }
}