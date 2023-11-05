<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@happistudio.com',
            'password' => bcrypt(123456)
        ]);
         User::create([
            'name' => 'customer',
            'email' => 'customer@happistudio.com',
            'password' => bcrypt(123456)
        ]);
    }
}
