<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
            'nama_mobil' => $this->faker->company(),
            'slug' => $this->faker->slug(),
            'harga_sewa' => $this->faker->numberBetween(100000, 1000000),
            'gambar' => $filePath,
            'bahan_bakar' => $this->faker->company(),
            'jumlah_kursi' => $this->faker->randomNumber(1),
            'transmisi' => $this->faker->randomElement(['manual', 'matic']),
            'status' => $this->faker->randomElement(['Tersedia', 'Tidak tersedia']),
            'deskripsi' => $this->faker->paragraph(),
            'tahun_mobil' => $this->faker->numberBetween(1000, 10000),
            'denda' => $this->faker->numberBetween(1000, 10000),
            'p3k' => $this->faker->boolean(),
            'charger' => $this->faker->boolean(),
            'audio' => $this->faker->boolean(),
            'ac' => $this->faker->boolean(),
        ];

    }
}