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
        $this->call([
            UserTableSeeder::class,
            InfoUserTableSeeder::class,
            PostTableSeeder::class,
            TagTableSeeder::class,
            CommentPostTableSeeder::class
        ]);
    }
}
