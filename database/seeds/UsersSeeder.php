<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'positive',
            'email' => 'user@positiveblue.com',
            'password' => 'blue123',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

    }
}
