<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Desk;
use App\Models\Post;
use App\Models\Task;
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
        Desk::factory(10)->create();
        Post::factory(10)->create();
        Card::factory(10)->create();
        Task::factory(10)->create();
    }
}
