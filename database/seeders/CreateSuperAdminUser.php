<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class CreateSuperAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gatot Kaca',
            'email' => 'gatot@pcr.ac.id',
            'password' => Hash::make('Gatotkaca12'),
            'role' => 'Super Admin'
        ]);
    }
}
