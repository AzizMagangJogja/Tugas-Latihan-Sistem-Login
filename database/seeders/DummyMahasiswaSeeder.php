<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData=[
            [
                'id'=>'01',
                'user_id'=>'07',
                'kelas_id'=>'01',
                'nim'=>'2401',
                'name'=>'Muhammad Aziz Zahran Ramadhan',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2002-11-17',
                'edit'=>0
            ],
            [
                'id'=>'02',
                'user_id'=>'08',
                'kelas_id'=>'02',
                'nim'=>'2402',
                'name'=>'Muhammad Azis',
                'tempat_lahir'=>'Klaten',
                'tanggal_lahir'=>'2003-01-17',
                'edit'=>0
            ],
            [
                'id'=>'03',
                'user_id'=>'09',
                'kelas_id'=>'02',
                'nim'=>'2403',
                'name'=>'Porfirios Brian',
                'tempat_lahir'=>'Sumba',
                'tanggal_lahir'=>'2003-04-27',
                'edit'=>0
            ],
            [
                'id'=>'04',
                'user_id'=>'10',
                'kelas_id'=>'02',
                'nim'=>'2404',
                'name'=>'Lutfi Roidatul Munawaroh',
                'tempat_lahir'=>'Ponorogo',
                'tanggal_lahir'=>'2003-06-06',
                'edit'=>0
            ],
            [
                'id'=>'05',
                'user_id'=>'11',
                'kelas_id'=>'02',
                'nim'=>'2405',
                'name'=>'Lintang Anjar Mulya',
                'tempat_lahir'=>'Ponorogo',
                'tanggal_lahir'=>'2003-05-01',
                'edit'=>0
            ],
            [
                'id'=>'06',
                'user_id'=>'12',
                'kelas_id'=>'01',
                'nim'=>'2406',
                'name'=>'Antonius Daniel',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2002-08-17',
                'edit'=>0
            ],
            [
                'id'=>'07',
                'user_id'=>'13',
                'kelas_id'=>'02',
                'nim'=>'2407',
                'name'=>'Choirul Ihsan',
                'tempat_lahir'=>'Wonosari',
                'tanggal_lahir'=>'2003-07-05',
                'edit'=>0
            ],
            [
                'id'=>'08',
                'user_id'=>'14',
                'kelas_id'=>'02',
                'nim'=>'2408',
                'name'=>'Maulana Latif Nabil',
                'tempat_lahir'=>'Klaten',
                'tanggal_lahir'=>'2003-10-01',
                'edit'=>0
            ],
            [
                'id'=>'09',
                'user_id'=>'15',
                'kelas_id'=>'01',
                'nim'=>'2409',
                'name'=>'Hilman Fadillah',
                'tempat_lahir'=>'Garut',
                'tanggal_lahir'=>'2002-07-23',
                'edit'=>0
            ],
            [
                'id'=>'10',
                'user_id'=>'16',
                'kelas_id'=>'01',
                'nim'=>'2410',
                'name'=>'Nurul Khofifah',
                'tempat_lahir'=>'Makasar',
                'tanggal_lahir'=>'2003-04-24',
                'edit'=>0
            ],
            [
                'id'=>'11',
                'user_id'=>'17',
                'kelas_id'=>'01',
                'nim'=>'2411',
                'name'=>'Defril Baharudin Azis',
                'tempat_lahir'=>'Kebumen',
                'tanggal_lahir'=>'2002-09-30',
                'edit'=>0
            ],
            [
                'id'=>'12',
                'user_id'=>'18',
                'kelas_id'=>'02',
                'nim'=>'2412',
                'name'=>'Kinan Azzahara',
                'tempat_lahir'=>'Tangerang',
                'tanggal_lahir'=>'2004-01-01',
                'edit'=>0
            ],
            [
                'id'=>'13',
                'user_id'=>'19',
                'kelas_id'=>'02',
                'nim'=>'2413',
                'name'=>'Nanda Setiawan',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2003-06-05',
                'edit'=>0
            ],
            [
                'id'=>'14',
                'user_id'=>'20',
                'kelas_id'=>'01',
                'nim'=>'2414',
                'name'=>'Ageng Setio Aji',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2003-01-27',
                'edit'=>0
            ],
            [
                'id'=>'15',
                'user_id'=>'21',
                'kelas_id'=>'02',
                'nim'=>'2415',
                'name'=>'Radhitya Pramudya Ananta',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2003-10-26',
                'edit'=>0
            ],
            [
                'id'=>'16',
                'user_id'=>'22',
                'kelas_id'=>'01',
                'nim'=>'2416',
                'name'=>'Hasan Syaka Alifi',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2002-11-16',
                'edit'=>0
            ],
            [
                'id'=>'17',
                'user_id'=>'23',
                'kelas_id'=>'01',
                'nim'=>'2417',
                'name'=>'Sadewa Akbar Azhari',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2003-01-31',
                'edit'=>0
            ],
            [
                'id'=>'18',
                'user_id'=>'24',
                'kelas_id'=>'02',
                'nim'=>'2418',
                'name'=>'Budi Adi Setyawan',
                'tempat_lahir'=>'Purworejo',
                'tanggal_lahir'=>'2003-06-11',
                'edit'=>0
            ],
            [
                'id'=>'19',
                'user_id'=>'25',
                'kelas_id'=>'01',
                'nim'=>'2419',
                'name'=>'Farah Diba',
                'tempat_lahir'=>'Solo',
                'tanggal_lahir'=>'2002-12-31',
                'edit'=>0
            ],
            [
                'id'=>'20',
                'user_id'=>'26',
                'kelas_id'=>'01',
                'nim'=>'2420',
                'name'=>'Gita Sekar Andarini',
                'tempat_lahir'=>'Bekasi',
                'tanggal_lahir'=>'2001-06-30',
                'edit'=>0
            ],
            ];

            foreach($mahasiswaData as $key => $val) {
                Mahasiswa::create($val);
            }
    }
}