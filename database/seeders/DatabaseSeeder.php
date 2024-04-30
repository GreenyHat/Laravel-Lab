<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $testUSer = User::factory()->hasContacts()->createOne(['email' => 'test@test.com']);
        $users = User::factory(5)->hasContacts(5)->create()->each(
            fn ($user) => $user->contacts->first()->sharedWithUsers()->attach($testUSer->id)
        );
        $testUSer->contacts->first()->sharedWithUSers()->attach($users->pluck('id'));

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
