<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demoadmin = [
            'name' => 'demo admin',
            'email' => 'demoadmin@domain.com',
            'password' => Hash::make('secret'),
            'super_admin' => false
        ];

        $user = User::create($demoadmin);
        $roles = Role::whereIn('name',['demo_admin'])->get();
        $user->roles()->sync($roles);

        $demo = [
            'name' => 'demo',
            'email' => 'demo@domain.com',
            'password' => Hash::make('secret'),
            'super_admin' => false
        ];

        $user = User::create($demo);
        $roles = Role::whereIn('name',['demo'])->get();
        $user->roles()->sync($roles);
    }
}
