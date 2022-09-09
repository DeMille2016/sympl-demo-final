<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        foreach (Project::all() as $project){
            $users = User::all()->random(rand(1,3))->pluck('id');
            $project->users()->attach($users);
        }
        foreach (User::all() as $project){
            $projects = Project::all()->random(rand(1,3))->pluck('id');
            $project->projects()->attach($projects);
        }
    }
}
