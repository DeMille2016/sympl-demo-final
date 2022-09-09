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
        $domain = '@sympl.be';
        //
            DB::table('users')->insert([
                'fname' => 'Lindsey',
                'lname' => 'Walton',
                'email' => 'lindsey.walton' . $domain,
                'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
            ]);
        DB::table('users')->insert([
            'fname' => 'Courtney',
            'lname' => 'Henry',
            'email' => 'courtney.henry' . $domain,
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
        ]);
        DB::table('users')->insert([
            'fname' => 'Tom',
            'lname' => 'Cook',
            'email' => 'tom.cook' . $domain,
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'
        ]);
        }
}
