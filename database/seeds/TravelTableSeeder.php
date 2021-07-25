<?php

use Illuminate\Database\Seeder;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Travel::insert(
        [
        		[
                	'nama' => 'Taman Bunga Wiladatika',
                	'alamat' => 'Jl. Jambore No.1, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 13720',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '08.00-16.00',
                	'gambar' => 'qq',
                	'deskripsi' => 'qq.',
                	'harga' => '10.000',
                	'category_id' => '11',
                	'city_id' => '1',
                ],
                [
                	'nama' => 'Taman Wisata Pasir Putih',
                	'alamat' => 'Jl. Rw. Geni Raya No.1, RT.1/RW.7, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '09.00-17.00',
                	'gambar' => 'qq',
                	'deskripsi' => 'qq',
                	'harga' => '25.000',
                	'category_id' => '1',
                	'city_id' => '1',
                ],
                [
                	'nama' => 'Kawah Putih',
                	'alamat' => 'Jl. Raya Soreang Ciwidey, Ciwidey, Bandung, Jawa Barat 40973. Bandung',
                	'aksesKendaraan' => 'Mobil,Motor',
                	'jamBuka' => '07.00-17.00',
                	'gambar' => 'public/uploads/posts/1613068622bromo.jpg',
                	'deskripsi' => 'qq',
                	'harga' => '20.000',
                	'category_id' => '3',
                	'city_id' => '12',
                ]
                
                	]
    );
    }
}
