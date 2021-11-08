<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('admins')->insert([
            'name' => $faker->name,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'type' => 'super_admin',
            'active'=>1,
        ]);
    }
}
