<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email')->insert([
            'email' => 'example_email@gmail.com',
            'active' => true,
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

    }
}
