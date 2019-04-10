<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // $this->call(UsersTableSeeder::class);
        foreach (range(1,10) as $index) {
            DB::table('dosen')->insert([
                'nip' => $index,
                'namadosen' => $faker->name,
                

            ]);
        }

        DB::table('mengajar')->insert([
            'nipdosen' => '1',
            'matakuliah_id' => '1'
        ]);
        
    	foreach (range(1,10) as $index) {
            DB::table('mhs')->insert([
                'nrp' => $index,
                'nama' => $faker->name,
                'nipdosenwali' => rand(1,10)
            ]);
            DB::table('matakuliah')->insert([
                'nama' => str_random(10)
            ]);

            DB::table('mengambil')->insert([
                'nrp_mhs' => $index,
                'matakuliah_id' => '1'
            ]);

        }
    }
}
