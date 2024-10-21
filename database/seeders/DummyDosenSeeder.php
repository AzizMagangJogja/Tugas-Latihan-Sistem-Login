<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData=[
            [
                'id'=>'01',
                'user_id'=>'02',
                'kelas_id'=>'01',
                'kode_dosen'=>'102',
                'nip'=>'1102',
                'name'=>'Puan Maharani'
            ],
            [
                'id'=>'02',
                'user_id'=>'03',
                'kelas_id'=>'02',
                'kode_dosen'=>'103',
                'nip'=>'1103',
                'name'=>'Kinto Ranti'
            ],
            [
                'id'=>'03',
                'user_id'=>'04',
                'kelas_id'=>null,
                'kode_dosen'=>'104',
                'nip'=>'1104',
                'name'=>'Febri Nova'
            ],
            [
                'id'=>'04',
                'user_id'=>'05',
                'kelas_id'=>null,
                'kode_dosen'=>'105',
                'nip'=>'1105',
                'name'=>'Indra Setiawan'
            ],
            [
                'id'=>'05',
                'user_id'=>'06',
                'kelas_id'=>null,
                'kode_dosen'=>'106',
                'nip'=>'1106',
                'name'=>'Thomas Adi'
            ],
            ];

            foreach($dosenData as $key => $val) {
                Dosen::create($val);
            }
    }
}