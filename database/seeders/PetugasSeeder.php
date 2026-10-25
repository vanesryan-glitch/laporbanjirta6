<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 1 akun admin BPBD (email & password tetap)
        User::updateOrCreate(
            ['email' => 'admin@bpbd-bandung.go.id'],
            [
                'name'     => 'Admin BPBD Kab. Bandung',
                'password' => Hash::make('admin12345'),
            ]
        );

        // 5 akun petugas dummy
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name'     => $faker->name,
                'email'    => $faker->unique()->safeEmail,
                'password' => Hash::make('petugas123'),
            ]);
        }
    }
}