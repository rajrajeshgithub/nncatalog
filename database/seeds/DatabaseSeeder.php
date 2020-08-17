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
         $this->call(AdminsTableSeeder::class);
         factory(App\Admin::class,3)->create();
         factory(App\Catalog::class,10)->create();
    }
}
