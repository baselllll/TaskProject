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
         $this->call(\Modules\Admin\Database\Seeders\AdminDatabaseSeeder::class);
         $this->call(\Modules\Setting\Database\Seeders\SettingDatabaseSeeder::class);
    }
}
