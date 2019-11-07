<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission=[
        	'manage-post',
        	'manage-review',
        	'manage-user',
        	'manage-category'];
        	foreach ($permission as $permission) {
        		Permission::create(['name'=>$permission]);
        		# code...
        	}
    }
}
