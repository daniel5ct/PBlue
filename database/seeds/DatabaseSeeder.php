<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(NewsletterSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(EmailSeeder::class);
        $this->call(EmailNewsletterSeeder::class);

        Model::reguard();
    }
}
