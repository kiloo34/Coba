<?php

namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alternatif = [
            ['name' => 'Lemosin'],
            ['name' => 'Simental'],
            ['name' => 'PO'],
            ['name' => 'Madura'],
            ['name' => 'Bali']
        ];

        foreach ($alternatif as $a) {
            Alternative::insert($a);
        }
    }
}
