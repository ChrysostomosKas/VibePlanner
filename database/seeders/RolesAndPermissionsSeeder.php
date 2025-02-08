<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        // create permissions
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'manageEvents']);
        Permission::create(['name' => 'manageActivities']);
        Permission::create(['name' => 'manageExpenses']);

        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo(Permission::all());

        $organizer = Role::create(['name' => 'Organizer']);
        $organizer->givePermissionTo(Permission::all());

        $participant = Role::create(['name' => 'Participant']);
        $participant->givePermissionTo('manageActivities');
        $participant->givePermissionTo('manageExpenses');

        $guest = Role::create(['name' => 'Guest']);
        $guest->givePermissionTo('manageActivities');
    }
}
