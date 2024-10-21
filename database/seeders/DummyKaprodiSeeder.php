<?php

namespace Database\Seeders;

use App\Models\Kaprodi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kaprodiData=[
            [
                'id'=>'01',
                'user_id'=>'01',
                'kode_dosen'=>'101',
                'nip'=>'1101',
                'name'=>'Suryanto'
            ]
            ];

            foreach($kaprodiData as $key => $val) {
                Kaprodi::create($val);
            }
    }
}