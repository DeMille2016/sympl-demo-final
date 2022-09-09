<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($x = 0; $x <= 10; $x++) {
            $rand = Str::random(3);
            DB::table('users')->insert([
                'name' => 'User' . $rand,
                'email' => 'User.' . $rand . '@sympl.be'
            ]);
        }
    }
}
