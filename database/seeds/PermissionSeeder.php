<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USER
        $permission = new Permission();
        $permission->name = 'module_user';
        $permission->title = 'User Menu Access';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_user.create';
        $permission->title = 'Create User';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_user.edit';
        $permission->title = 'Edit User';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_user.show';
        $permission->title = 'Show User';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_user.delete';
        $permission->title = 'Delete User';
        $permission->save();

        //PERMISSION
        $permission = new Permission();
        $permission->name = 'module_role';
        $permission->title = 'Role Menu Access';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_role.create';
        $permission->title = 'Create Role';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_role.edit';
        $permission->title = 'Edit Role';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_role.show';
        $permission->title = 'Show Role';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_role.delete';
        $permission->title = 'Delete Role';
        $permission->save();

        //PERMISSION
        $permission = new Permission();
        $permission->name = 'module_permission';
        $permission->title = 'Permission Menu Access';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_permission.create';
        $permission->title = 'Create Permission';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_permission.edit';
        $permission->title = 'Edit Permission';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_permission.show';
        $permission->title = 'Show Permission';
        $permission->save();

        $permission = new Permission();
        $permission->name = 'module_permission.delete';
        $permission->title = 'Delete Permission';
        $permission->save();
    }
}
