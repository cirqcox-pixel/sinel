<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Kivu Terrace Residences',
                'category' => 'Branded Residences',
                'location' => 'Kigali, Rwanda',
                'description' => 'A branded residences development on the shores of Lake Kivu, combining hospitality-grade service standards with private ownership — from site selection through to brand compliance.',
                'color_from' => '#3B4E99',
                'color_to' => '#181F42',
                'sort_order' => 1,
            ],
            [
                'title' => 'Nyanza Grand Hotel',
                'category' => 'International Franchise',
                'location' => 'Kampala, Uganda',
                'description' => 'A full-service franchise conversion, taking an existing property through brand-owner approval, design compliance and pre-opening training to relaunch under an international flag.',
                'color_from' => '#24325E',
                'color_to' => '#10162E',
                'sort_order' => 2,
            ],
            [
                'title' => 'Solara Beach Resort',
                'category' => 'Luxury Resort Complex',
                'location' => 'Zanzibar, Tanzania',
                'description' => 'A ground-up luxury resort project, with Sinel Hospitality overseeing design and construction supervision, recruitment of the opening team, and revenue management strategy.',
                'color_from' => '#4C5FAE',
                'color_to' => '#202A54',
                'sort_order' => 3,
            ],
            [
                'title' => 'The Equator Suites',
                'category' => 'Business Hotel',
                'location' => 'Nairobi, Kenya',
                'description' => 'A city-centre business hotel repositioning, focused on operational efficiency, staff training and a sales & marketing plan built around corporate and MICE demand.',
                'color_from' => '#2E3A73',
                'color_to' => '#141A33',
                'sort_order' => 4,
            ],
            [
                'title' => 'Lakeshore Villas',
                'category' => 'Turnkey Development',
                'location' => 'Entebbe, Uganda',
                'description' => 'A turnkey villa development managed end-to-end by Sinel Hospitality — from concept and market analysis through contract management and unit-level operations.',
                'color_from' => '#57699E',
                'color_to' => '#232E5A',
                'sort_order' => 5,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}