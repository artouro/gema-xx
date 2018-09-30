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
        // 1 = Admin
        // 2 = Peserta SD
        // 3 = Peserta SMP
        // 4 = Peserta SMA
        $user = new \App\User;
        $user->level = 1;
        $user->username = 'admin';
        $user->password = bcrypt('admin');
        $user->nama_lengkap = 'Administrator';
        $user->pangkalan = 'SMPN 1 Baleendah';
        $user->asal_kota = 'Bandung';
        $user->save();

        $user = new \App\User;
        $user->level = 2;
        $user->username = 'sd';
        $user->password = bcrypt('sd');
        $user->nama_lengkap = 'Regu Burung Hantu';
        $user->pangkalan = 'SDN Galih Pawarti';
        $user->asal_kota = 'Bandung';
        $user->save();

        $user = new \App\User;
        $user->level = 3;
        $user->username = 'smp';
        $user->password = bcrypt('smp');
        $user->nama_lengkap = 'Regu Elang Jawa';
        $user->pangkalan = 'SMPN 2 Baleendah';
        $user->asal_kota = 'Bandung';
        $user->save();

        $user = new \App\User;
        $user->level = 4;
        $user->username = 'sma';
        $user->password = bcrypt('sma');
        $user->nama_lengkap = 'Sangga Pendobrak I';
        $user->pangkalan = 'SMAN 1 Baleendah';
        $user->asal_kota = 'Bandung';
        $user->save();
    }
}
