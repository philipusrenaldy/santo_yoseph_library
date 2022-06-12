<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'              => 'admin siswa',
                'username'          => 'admin1',
                'email'             => 'philipusrenaldy@gmail.com',
                'password'          => bcrypt('Iniadalahpassword123.'),
                'address'           => 'Jl. Mirah IV',
                'phoneNumber'       => '088556541564',
                'NISN'              => '1234567',
                'is_admin'          => 0,
                'is_guru'           => 0
            ],
            [
                'name'              => 'admin guru',
                'username'          => 'admin2',
                'email'             => 'mtimotik@gmail.com',
                'password'          => bcrypt('Iniadalahpassword123.'),
                'address'           => 'Jl. Mirah IV',
                'phoneNumber'       => '088556541564',
                'NISN'              => '1234567',
                'is_admin'          => 0,
                'is_guru'           => 1
            ],
            [
                'name'              => 'admin utama',
                'username'          => 'admin',
                'email'             => 'aevanhk2@gmail.com',
                'password'          => bcrypt('Iniadalahpassword123.'),
                'address'           => 'Jl. Mirah IV',
                'phoneNumber'       => '088556541564',
                'NISN'              => '1234567',
                'is_admin'          => 1,
                'is_guru'           => 0
            ]
        ];

        DB::table('users')->insert($data);
    }
}
