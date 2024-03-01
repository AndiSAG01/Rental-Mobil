<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bank;
use App\Models\Car;
use App\Models\categorie;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
       $cars = [
            [
                'nama_mobil' => 'Toyota Kijang Innova',
                'categories_id' => 1,
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_kijang.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 250000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza5.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza4.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 250000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza3.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza2.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 300000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza_veloz2.jpeg',
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
                'categories_id' => 1,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/toyota_avanza_veloz.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/honda_mobilio.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/daihatsu_xenia4.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/daihatsu_xenia3.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/daihatsu_xenia2.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 200000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/daihatsu_xenia.jpeg',
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
                'categories_id' => 3,
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/daihatsu_sigra.jpeg',
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
                'categories_id' => 4,
                'harga_sewa' => 150000,
                'slug' => $slug,  // Remove quotes to insert as integer
                'gambar' => 'cars/brio.jpeg',
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
        ];

        foreach($cars as $product)
        {
            // Upload gambar dari folder public ke folder storage
            $imagePath = $product['gambar'];
            $storagePath = 'imageproducts/' . $product['gambar'];
            Storage::disk('public')->put($storagePath, file_get_contents(public_path($imagePath)));

            // Buat record produk di database
            Car::create([
                'nama_mobil' => $product['nama_mobil'],
                'categories_id' => $product['categories_id'],
                'harga_sewa' => $product['harga_sewa'],
                'slug' => $slug,
                'gambar' => $storagePath,
                'plat' => $product['plat'],
                'bahan_bakar' => $product['bahan_bakar'],
                'jumlah_kursi' => $product['jumlah_kursi'],
                'transmisi' => $product['transmisi'],
                'status' => $product['status'],
                'deskripsi' => $product['deskripsi'],
                'denda' => $product['denda'],
                'tahun_mobil' => $product['tahun_mobil'],
                'p3k' => $product['p3k'],
                'charger' => $product['charger'],
                'audio' => $product['audio'],
                'ac' => $product['ac'],
            ]);
        }

        $bank = [
            [
                'no_rekening' => '7811378892',
                'image' => 'bank/bni.png',
            ],
            [
                'no_rekening' => '000101011822534',
                'image' => 'bank/bri.png',
            ],
            [
                'no_rekening' => '5220304312',
                'image' => 'bank/bca.png',
            ],
        ];
        
        foreach($bank as $product)
        {
            // Upload gambar dari folder public ke folder storage
            $imagePath = $product['image'];
            $storagePath = 'imageproducts/' . $product['image'];
            Storage::disk('public')->put($storagePath, file_get_contents(public_path($imagePath)));

            // Buat record produk di database
            Bank::create([
                'no_rekening' => $product['no_rekening'],
                'image' => $storagePath,
            ]);
        }

        $categorie = [
            [
                'name' => 'Toyota',
            ],
            [
                'name' => 'Mitsubishi',
            ],
            [
                'name' => 'Daihatsu',
            ],
            [
                'name' => 'Honda',
            ],
            [
                'name' => 'Suzuki',
            ],
            
        ];
        
        foreach($categorie as $product)
        {
         
            
            categorie::create([
                'name' => $product['name'],
            ]);
        }
    }
}
