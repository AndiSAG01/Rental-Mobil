<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Haruncpi\laravelIdGenerator\IdGenerator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $fileName = rand(0,9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('cars', $fileName, 'public');

        return [
            'kd_user' => $this->faker->slug().Str::random(4),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'username' => $this->faker->userName(),
            'alamat' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['male', 'female',]),
            'phone_number' => $this->faker->phoneNumber(),
            'ktp_number' => $this->faker->ean13(),
            'ktp_photo' => $filePath,
            'password' =>bcrypt('12345'),
            'isAdmin' => 0,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}