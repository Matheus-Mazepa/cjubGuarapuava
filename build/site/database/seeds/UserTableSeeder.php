<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\User::create(["name"=>"admin", "email"=>"admin@admin.com", "password"=>bcrypt("tagsell")]);
    }
}