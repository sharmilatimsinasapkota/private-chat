<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email'=>'sharmila@hotmail.com',
            'name'=>'sharmila'
        ]);
        User::factory()->create([
            'email'=>'sharmila2@hotmail.com',
            'name'=>'sharmila2'
        ]);
        User::factory()->create([
            'email'=>'sharmila3@hotmail.com',
            'name'=>'sharmila3'
        ]);
    }
}
