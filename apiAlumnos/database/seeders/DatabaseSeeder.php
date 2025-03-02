<?php
namespace Database\Seeders;
use Database\Seeders\AlumnoSeeder;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Poblar la base de datos con seeder
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            AlumnoSeeder::class
        ]);
    }
}
