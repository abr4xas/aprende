<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		\App\Models\User::create([
            'name'              => 'John Doe',
            'email'             => 'john.doe@domain.tld',
            'email_verified_at' => now(),
            'password'          => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token'    => \Illuminate\Support\Str::random(10),
        ]);

        \App\Models\Course::factory(20)->create();
    }
}
