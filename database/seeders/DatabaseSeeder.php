<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RolesAndPermissionsSeeder::class]);

        $guests = User::factory(5)->create();
        $organizers = User::factory(2)->create();
        $participants = User::factory(10)->create();

        $guests->each(fn($guest) => $guest->assignRole('Guest'));
        $organizers->each(fn($organizer) => $organizer->assignRole('Organizer'));
        $participants->each(fn($participant) => $participant->assignRole('Participant'));

        $user = User::factory()->create([
            'email' => 'soulis@test.com',
            'first_name' => 'Chrysostomos',
            'last_name' => 'Kasapidis',
        ]);

        $user->assignRole('Admin');
    }
}
