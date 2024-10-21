<?php

namespace Database\Seeders;

use App\Models\Kaprodi;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasData=[
            [
                'id'=>'01',
                'name'=>'Informatika-1',
                'jumlah'=>'10',
            ],
            [
                'id'=>'02',
                'name'=>'Informatika-2',
                'jumlah'=>'10',
            ]
            ];

            foreach($kelasData as $key => $val) {
                Kelas::create($val);
            }
    }
}