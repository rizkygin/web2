<?php

use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create(); //import library Faker
      $limit = 5; //batasan berapa banyak data atau kolom

      $barang=1;
      for($i=0 ;$i<$limit ; $i++){
      DB::table('barang')->insert([
          'nama_barang' => 'barang '.$barang,
          'stok'=> $faker->randomDigit,
          'harga'=> $faker->randomNumber(5),
          'expired_date'=> $faker->date,
          'tanggal_produksi'=>$faker->date,
        ]);
        $barang++;
      }
    }
}
