<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Admin', 'email'=>'admin@admin.com', 'password'=> bycrypt('admin'), 'is_admin'=>1]);
    }
}
