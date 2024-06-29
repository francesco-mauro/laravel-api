<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Example Project 1',
            'description' => 'Description for project dfsfas'
        ]);

        Project::create([
            'title' => 'Example Project 2',
            'description' => 'Description for project gffrrg'
        ]);
    }
};