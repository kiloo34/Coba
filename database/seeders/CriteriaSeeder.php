<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kriteria = [
            ['name' => 'umur'],
            ['name' => 'berat'],
            ['name' => 'warna'],
            ['name' => 'harga'],
            ['name' => 'ukuran']
        ];

        foreach ($kriteria as $k) {
            Criteria::insert($k);
        }
    }
}
