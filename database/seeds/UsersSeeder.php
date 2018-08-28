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
        $user->username = 'avatar';
        $user->password = bcrypt('avatar1238');
        $user->name = 'The Avatar';
        $user->level = 1;
        $user->save();
    }
}
