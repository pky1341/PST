<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminReg;

class PSTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminReg::truncate();

        $users = [
            [
                'username' => 'Super123',
                'email' => 'superadmin@gmail.com',
                'password' => '123456',
            ],
            [
                'username' => 'Account453',
                'email' => 'accountadmin@gmail.com',
                'password' => '13456',
            ],
            [
                'username' => 'Project678',
                'email' => 'projectadmin@gmail.com',
                'password' => '13456',
            ],
            [
                'username' => 'Client12345',
                'email' => 'clientadmin@gmail.com',
                'password' => '13456',
            ]
        ];

        AdminReg::insert($users);
    }
}
