<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin', 'customer']; 
        foreach($roles as $value){
            $role = new Role();
            $role->name=$value;
            $role->save();
        }
    }
}
