<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create();

        User::factory()->create([
            'name' => 'Felipe Pinheiro',
            'email' => 'felipe@link.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
