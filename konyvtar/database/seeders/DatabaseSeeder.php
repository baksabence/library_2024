<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // fontos a sorrend
=======
        //fontos a sorrend!!
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
        User::factory(10)->create();
        Book::factory(10)->create();
        Copy::factory(10)->create();

<<<<<<< HEAD
      //  User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       // ]);
=======
        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    }
}
