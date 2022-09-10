<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Role;
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
        $project = Project::all()->where('name','Project 1')->first();
        $users = User::all()->where('fname','Lindsey')->pluck('id');
        $project->users()->attach($users);

        $project = Project::all()->where('name','Project 3')->first();
        $users = User::all()->where('fname','Lindsey')->pluck('id');
        $project->users()->attach($users);

        $project = Project::all()->where('name','Project 2')->first();
        $users = User::all()->where('fname','Tom')->pluck('id');
        $project->users()->attach($users);
        $role = Role::all()->where('name','Director')->first();
        $users = User::all()->where('fname','Tom')->pluck('id');
        $role->users()->attach($users);
        $role = Role::all()->where('name','Product Development')->first();
        $users = User::all()->where('fname','Tom')->pluck('id');
        $role->users()->attach($users);
        $role = Role::all()->where('name','Front-End Developer')->first();
        $users = User::all()->where('fname','Lindsey')->pluck('id');
        $role->users()->attach($users);
        $role = Role::all()->where('name','Designer')->first();
        $users = User::all()->where('fname','Courtney')->pluck('id');
        $role->users()->attach($users);

    }
}
