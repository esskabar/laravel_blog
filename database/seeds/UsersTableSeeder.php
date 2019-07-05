<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name' , 'super_admin')->first();
        $managerRole = Role::where('name' , 'city_manager')->first();
        $memberRole = Role::where('name' , 'organization_member')->first();

        $super_admin = User::create([
            'name' => 'Maxim Admin',
            'email' => 'max.gavrushenko.tirare@gmail.com',
            'password' => bcrypt('sr9rXEvxvtVRpCK')
        ]);

        $city_manager = User::create([
            'name' => 'City Manager',
            'email' => 'esskabar@gmail.com',
            'password' => bcrypt('manager')
        ]);

        $organization_member = User::create([
            'name' => 'Organization Member',
            'email' => 'first_organization_member@gmail.com',
            'password' => bcrypt('member')
        ]);

        $super_admin->roles()->attach($adminRole);
        $city_manager->roles()->attach($managerRole);
        $organization_member->roles()->attach($memberRole);

    }
}
