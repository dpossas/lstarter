<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'demo_admin';
        $role->title = 'Demo Admin';
        $role->save();

        $permissions = Permission::whereIn('name',[
            'module_user','module_user.create','module_user.show',
            'module_role','module_role.create','module_role.show',
            'module_permission','module_permission.create','module_permission.show'])->get();
        $role->permissions()->sync($permissions);

        $role = new Role();
        $role->name = 'demo';
        $role->title = 'Demo';
        $role->save();

        $permissions = Permission::whereIn('name',[
            'module_user','module_user.show',
            'module_role','module_role.show',
            'module_permission','module_permission.show'])->get();
        $role->permissions()->sync($permissions);
    }
}
