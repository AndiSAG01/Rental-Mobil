<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Car::factory(10)->create();
        // User::factory(10)->create();

        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('cars', $fileName, 'public');


        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin'.Str::random(2),
            'alamat' => 'Alamat Admin',
            'gender' => 'Male',
            'phone_number' => '1234567890',
            'ktp_number' => '123456789',
            'ktp_photo' => $filePath,
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'isAdmin' => 1,
        ]);

    }

}
