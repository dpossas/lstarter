<?php

use Illuminate\Database\Seeder;

class SuperAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('secret'),
            'super_admin' => true
        ];

        User::create($admin);
    }
}
