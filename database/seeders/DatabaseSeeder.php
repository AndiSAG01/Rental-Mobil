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
        $fileName = rand(0, 9999999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('cars', $fileName, 'public');


        DB::table('users')->insert([
            'kd_user' => Str::random(5),
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'alamat' => 'Alamat Admin',
            'gender' => 'Male',
            'phone_number' => '1234567890',
            'ktp_number' => '123456789',
            'ktp_photo' => $filePath,
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'isAdmin' => 1,
        ]);
        $slug = Str::slug('Toyota alpart');
        collect([
            [
                'nama_mobil' => 'Toyota Kijang Innova',
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_kijang.jpeg',
                'plat' => 'BH 1228 MH',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza G 1.5',
                'harga_sewa' => 250000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza5.jpeg',
                'plat' => 'BH 1838 YF',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2022,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza G 1.3',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza4.jpeg',
                'plat' => 'BH 1984 NX',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza G 1.5',
                'harga_sewa' => 250000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza3.jpeg',
                'plat' => 'BH 1375 YE',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2022,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza E 1.3',
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza2.jpeg',
                'plat' => 'B 1175 NZF',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2020,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza E 1.3',
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza.jpeg',
                'plat' => 'BH 1467 NV',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2020,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza Veloz 1.3',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza_veloz2.jpeg',
                'plat' => 'B 1601 EZB',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Toyota Avanza Veloz 1.5L',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/toyota_avanza_veloz.jpeg',
                'plat' => 'B 2956 BZO',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Toyota, pembuat mobil Jepang terkemuka, 
                dikenal karena membuat kendaraan yang andal dan hemat bahan bakar. 
                Terkenal karena inovasi, jajaran mereka mencakup SUV serbaguna, 
                sedan yang efisien, dan model hibrida perintis. 
                Dengan komitmen terhadap kualitas dan fitur keselamatan canggih, 
                Toyota terus menjadi pilihan tepercaya bagi pengemudi di seluruh dunia.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Honda Mobilio',
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/honda_mobilio.jpeg',
                'plat' => 'BH 1266 YF',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 4,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Honda Mobilio, MPV serbaguna dan luas, memadukan kepraktisan dengan gaya. 
                Dirancang untuk keluarga, hotel ini memiliki pengaturan tempat duduk yang fleksibel, ruang kargo yang luas, dan fasilitas modern. 
                Dengan reputasi Honda untuk daya tahan dan kinerja, Mobilio menawarkan pengalaman berkendara yang nyaman dan andal.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Daihatsu Xenia R',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/daihatsu_xenia4.jpeg',
                'plat' => 'BH 1255 NA',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Daihatsu, produsen mobil Jepang terkemuka, menawarkan berbagai kendaraan kompak dan hemat bahan bakar. 
                Dikenal karena desainnya yang praktis dan harganya yang terjangkau, mobil Daihatsu memenuhi gaya hidup perkotaan. 
                Dengan fokus pada keandalan dan inovasi, Daihatsu memberikan pilihan cerdas bagi pengemudi yang mencari transportasi yang efisien dan ramah kota.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2017,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Daihatsu Xenia R 1.3',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/daihatsu_xenia3.jpeg',
                'plat' => 'BH 1988 NA',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Daihatsu, produsen mobil Jepang terkemuka, menawarkan berbagai kendaraan kompak dan hemat bahan bakar. 
                Dikenal karena desainnya yang praktis dan harganya yang terjangkau, mobil Daihatsu memenuhi gaya hidup perkotaan. 
                Dengan fokus pada keandalan dan inovasi, Daihatsu memberikan pilihan cerdas bagi pengemudi yang mencari transportasi yang efisien dan ramah kota.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2017,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Daihatsu Xenia R',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/daihatsu_xenia2.jpeg',
                'plat' => 'BH 1347 GG',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Daihatsu, produsen mobil Jepang terkemuka, menawarkan berbagai kendaraan kompak dan hemat bahan bakar. 
                Dikenal karena desainnya yang praktis dan harganya yang terjangkau, mobil Daihatsu memenuhi gaya hidup perkotaan. 
                Dengan fokus pada keandalan dan inovasi, Daihatsu memberikan pilihan cerdas bagi pengemudi yang mencari transportasi yang efisien dan ramah kota.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2019,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Daihatsu Xenia 1.3 X',
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/daihatsu_xenia.jpeg',
                'plat' => 'BH 1371 BF',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 6,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Daihatsu, produsen mobil Jepang terkemuka, menawarkan berbagai kendaraan kompak dan hemat bahan bakar. 
                Dikenal karena desainnya yang praktis dan harganya yang terjangkau, mobil Daihatsu memenuhi gaya hidup perkotaan. 
                Dengan fokus pada keandalan dan inovasi, Daihatsu memberikan pilihan cerdas bagi pengemudi yang mencari transportasi yang efisien dan ramah kota.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2020,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Daihatsu Sigra',
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/daihatsu_sigra.jpeg',
                'plat' => 'BH 1686 WF',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 4,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Daihatsu, produsen mobil Jepang terkemuka, menawarkan berbagai kendaraan kompak dan hemat bahan bakar. 
                Dikenal karena desainnya yang praktis dan harganya yang terjangkau, mobil Daihatsu memenuhi gaya hidup perkotaan. 
                Dengan fokus pada keandalan dan inovasi, Daihatsu memberikan pilihan cerdas bagi pengemudi yang mencari transportasi yang efisien dan ramah kota.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2018,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
            [
                'nama_mobil' => 'Brio',
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'assets/cars/brio.jpeg',
                'plat' => 'BH 1131 NR',
                'bahan_bakar' => 'Bensin',
                'jumlah_kursi' => 4,  // Remove quotes to insert as integer
                'transmisi' => 'Manual',
                'status' => 'Tersedia',
                'deskripsi' => 'Honda Brio, hatchback kompak dan bergaya, menggabungkan kelincahan dengan desain modern. 
                Ideal untuk perjalanan perkotaan, Brio menawarkan efisiensi bahan bakar dan penanganan yang gesit. 
                Dengan komitmen Honda terhadap kualitas, Brio memberikan pengalaman berkendara yang andal dan menyenangkan.',
                'denda' => 100000,  // Remove quotes to insert as integer
                'tahun_mobil' => 2017,  // Remove quotes to insert as integer
                'p3k' => 1,  // Assuming 'p3k' is boolean or integer
                'charger' => 1,  // Assuming 'charger' is boolean or integer
                'audio' => 1,  // Assuming 'audio' is boolean or integer
                'ac' => 1,  // Assuming 'ac' is boolean or integer
            ],
        ])->each(function ($cars) {
            DB::table('cars')->insert($cars);
        });

        collect([
            [
                'no_rekening' => '7811378892',
                'image' => 'assets/bank/bni.png',
            ],
            [
                'no_rekening' => '000101011822534',
                'image' => 'assets/bank/bri.png',
            ],
            [
                'no_rekening' => '5220304312',
                'image' => 'assets/bank/bca.png',
            ],
        ])->each(function($bank){
            DB::table('bank')->insert($bank);
        });
    }
}
