<?php

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

        factory(App\Models\Categorie::class, 10)->create();
        factory(App\Client::class, 10)->create();
        factory(App\Jobeur::class, 10)->create();

        $this->call(AdminTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
