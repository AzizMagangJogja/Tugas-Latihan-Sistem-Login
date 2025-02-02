<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData=[
            [
                'id'=>'01',
                'username'=>'Suryanto',
                'email'=>'suryanto@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'kaprodi'
            ],
            [
                'id'=>'02',
                'username'=>'Puan',
                'email'=>'puan@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'dosen_wali'
            ],
            [
                'id'=>'03',
                'username'=>'Kinto',
                'email'=>'kinto@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'dosen_wali'
            ],
            [
                'id'=>'04',
                'username'=>'Febri',
                'email'=>'febri@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'dosen_wali'
            ],
            [
                'id'=>'05',
                'username'=>'Indra',
                'email'=>'indra@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'dosen_wali'
            ],
            [
                'id'=>'06',
                'username'=>'Thomas',
                'email'=>'thomas@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'dosen_wali'
            ],
            [
                'id'=>'07',
                'username'=>'Aziz',
                'email'=>'aziz@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'08',
                'username'=>'Azis',
                'email'=>'azis@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'09',
                'username'=>'Brian',
                'email'=>'brian@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'10',
                'username'=>'Lutfi',
                'email'=>'lutfi@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'11',
                'username'=>'Lintang',
                'email'=>'lintang@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'12',
                'username'=>'Anton',
                'email'=>'anton@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'13',
                'username'=>'Ihsan',
                'email'=>'ihsan@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'14',
                'username'=>'Maulana',
                'email'=>'maulana@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'15',
                'username'=>'Hilman',
                'email'=>'hilman@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'16',
                'username'=>'Nurul',
                'email'=>'nurul@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'17',
                'username'=>'Defril',
                'email'=>'defril@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'18',
                'username'=>'Kinan',
                'email'=>'kinan@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'19',
                'username'=>'Nanda',
                'email'=>'nanda@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'20',
                'username'=>'Ageng',
                'email'=>'ageng@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'21',
                'username'=>'Nanta',
                'email'=>'nanta@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'22',
                'username'=>'Kaka',
                'email'=>'kaka@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'23',
                'username'=>'Dewa',
                'email'=>'dewa@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'24',
                'username'=>'Budi',
                'email'=>'budi@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'25',
                'username'=>'Farah',
                'email'=>'farah@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            [
                'id'=>'26',
                'username'=>'Gita',
                'email'=>'gita@gmail.com',
                'password'=>bcrypt('123456'),
                'role'=>'mahasiswa'
            ],
            ];

            foreach($userData as $key => $val) {
                User::create($val);
            }
    }
}