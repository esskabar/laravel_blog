<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'super_admin']);
        Role::create(['name' => 'city_manager']);
        Role::create(['name' => 'organization_member']);
    }
}
