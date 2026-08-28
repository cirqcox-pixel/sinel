<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->published()
            ->ordered()
            ->get();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        abort_unless($project->is_published, 404);

        $related = Project::query()
            ->published()
            ->ordered()
            ->whereKeyNot($project->id)
            ->take(3)
            ->get();

        return view('projects.show', [
            'project' => $project,
            'related' => $related,
        ]);
    }
}