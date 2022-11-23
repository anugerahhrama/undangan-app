<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama' => 'abdul aziz',
                'email' => 'dulaziz268@gmail.com',
                'password' => bcrypt('123'),
                'no_hp' => '02328323',
                'alamat' => 'cirebon',
                'role' => 'admin'
            ],
            [
                'nama' => 'khoirul anwarudin',
                'email' => 'rull@gmail.com',
                'password' => bcrypt('123'),
                'no_hp' => '02328323',
                'alamat' => 'Tulungagung',
                'role' => 'user'
            ],
            [
                'nama' => 'anugerah ramadhani',
                'email' => 'anugerah@gmail.com',
                'password' => bcrypt('123'),
                'no_hp' => '02328323',
                'alamat' => 'Blitar',
                'role' => 'user'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
