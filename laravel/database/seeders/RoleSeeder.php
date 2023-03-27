<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_arr = [
            'Admin', 'User', 'Guest'
        ];

        for($i = 0; $i<count($roles_arr); $i++){
            $role = new Role();
            $role->name = $roles_arr[$i];
            $role->save();
        }
    }
}
