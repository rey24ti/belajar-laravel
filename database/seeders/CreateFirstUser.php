<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 User::create([
    'name' => 'Admin',
    'email' => 'rey24ti@mahasiswa.pcr.ac.id',
    'password' => Hash::make('VYNXIS')
]);
    }
}
