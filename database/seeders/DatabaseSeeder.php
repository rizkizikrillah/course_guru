<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tambahkan beberapa user acak
        User::factory()->count(10)->create();

        // Tambahkan user spesifik jika belum ada
        $users = [
            ['name' => 'Dahlan', 'email' => 'dahlan@smktibazma.sch.id', 'password' => 'dahlanbazma1992'],
            ['name' => 'Indra', 'email' => 'indra@smktibazma.sch.id', 'password' => 'indrabazma1992'],
            ['name' => 'Ilham', 'email' => 'ilham@smktibazma.sch.id', 'password' => 'ilhambazma1992'],
            ['name' => 'Fajar', 'email' => 'fajar@smktibazma.sch.id', 'password' => 'fajarbazma1992'],
            ['name' => 'Fahlevi', 'email' => 'fahlevi@smktibazma.sch.id', 'password' => 'fahlevibazma1992'],
            ['name' => 'Miftahul', 'email' => 'miftahul@smktibazma.sch.id', 'password' => 'miftahulbazma1992'],
            ['name' => 'Fakhrudin', 'email' => 'fakhrudin@smktibazma.sch.id', 'password' => 'fakhrudinbazma1992'],
            ['name' => 'Dzikri', 'email' => 'dzikri@smktibazma.sch.id', 'password' => 'dzikribazma1992'],
            ['name' => 'Fatimah', 'email' => 'fatimah@smktibazma.sch.id', 'password' => 'fatimahbazma1992'],
            ['name' => 'Mirza', 'email' => 'mirza@smktibazma.sch.id', 'password' => 'mirzabazma1992'],
            ['name' => 'Ristina', 'email' => 'ristina@smktibazma.sch.id', 'password' => 'ristinabazma1992'],
            ['name' => 'Parni', 'email' => 'parni@smktibazma.sch.id', 'password' => 'parnibazma1992'],
            ['name' => 'Nanang', 'email' => 'nanang@smktibazma.sch.id', 'password' => 'nanangbazma1992'],
        ];

        foreach ($users as $data) {
            User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]
            );
        }

        $this->call(ModulSeeder::class);
    }
}