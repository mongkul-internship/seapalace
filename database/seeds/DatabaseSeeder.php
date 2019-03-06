<?php

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
        // factory(App\User::class, 50)->create();

        factory(\App\Category::class, 10000)->create();

        // get users
        $faker = \Faker\Factory::create();

        $users = \App\User::all();
        foreach ($users as $user) {
            for ($i = 0; $i < 10; $i++) {
                \App\Post::create([
                    'user_id' => $user->id,
                    'title' => $faker->text('255'),
                    'description' => $faker->paragraph(10),
                ]);
            }
        }
    }
}
