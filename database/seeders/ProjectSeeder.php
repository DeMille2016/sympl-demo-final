<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 10; $x++) {
            DB::table('projects')->insert([
                'name' => Str::random(10)
            ]);
        }
        foreach (Project::all() as $project){
            $users = User::all()->random(rand(1,3))->pluck('id');
            $project->users()->attach($users);
        }

    }
}
