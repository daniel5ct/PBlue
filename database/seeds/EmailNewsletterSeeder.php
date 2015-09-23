<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EmailNewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_newsletter')->insert([
            'id_newsletter' => 1,
            'email' => 'daniel3ct@gmail.com',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);
    }
}
