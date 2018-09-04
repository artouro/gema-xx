<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->username = 'admin';
        $user->password = bcrypt('admin1238');
        $user->name = 'Administrator';
        $user->level = 1;
        $user->save();
    }
}
