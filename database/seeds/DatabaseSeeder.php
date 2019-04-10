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
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            // DB::table('mhs')->insert([
            //     'nrp' => str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT),
            //     'nama' => $faker->name,
            //     'nipdosenwali' => rand(1,10)
            // ]);
            DB::table('matakuliah')->insert([
                'nama' => str_random(10)
            ]);
        }
    }
}
