<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Admin::create([
            'name' => 'baselosama',
            'email'=> 'admin@admin.com',
            'password'=>bcrypt('password'),
        ]);
    }
}
