<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        \Illuminate\Support\Facades\DB::table('users')->insert([
            ["name"=>"ameen","password"=>Hash::make("a"),"phone"=>"0656234240", "email"=>"aminegangster@gmail.com","role"=>1]
        ]);
    }
}
