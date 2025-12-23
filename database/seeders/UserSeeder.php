<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        User::factory(10)
            ->create()
            ->each(function ($user) use ($faker) {
                // $imageUrl = $faker->imageUrl(50, 50, null, false);
                $imageUrl = 'https://placehold.co/50x50/png';
                $user->addMediaFromUrl($imageUrl)->toMediaCollection('avatars');

                Post::factory(rand(1, 10))->create(['user_id' => $user->id]);
            });
    }
}
