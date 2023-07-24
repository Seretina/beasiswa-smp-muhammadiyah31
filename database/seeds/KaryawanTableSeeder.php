<?php

use App\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawans = [
            [
                'nisn' => '0109083731',
                'name' => 'Didik Ilham Kurniawan',
                'class' => 'Kelas 8 A',
                'gender' => 'Laki - Laki',
                'pob' => 'Jakarta',
                'dob' => '2010-04-03',
                'religion' => 'Islam',
                'name_parent' => 'Akhlis Suryapati',
                'address' => 'TBI 1, Blok W440 RT07/RW014',
            ],
            [
                'nisn' => '0109083732',
                'name' => 'Lili Irlandia',
                'class' => 'Kelas 8 A',
                'gender' => 'Laki - Laki',
                'pob' => 'Jakarta',
                'dob' => '2010-04-03',
                'religion' => 'Islam',
                'name_parent' => 'Akhlis Suryapati',
                'address' => 'TBI 1, Blok W440 RT07/RW014',
            ],
            [
                'nisn' => '0109083733',
                'name' => 'Kafi A Mal Falah',
                'class' => 'Kelas 8 A',
                'gender' => 'Laki - Laki',
                'pob' => 'Jakarta',
                'dob' => '2010-04-03',
                'religion' => 'Islam',
                'name_parent' => 'Akhlis Suryapati',
                'address' => 'TBI 1, Blok W440 RT07/RW014',
            ],
            [
                'nisn' => '0109083734',
                'name' => 'Khayra Zahra Aulia',
                'class' => 'Kelas 8 A',
                'gender' => 'Laki - Laki',
                'pob' => 'Jakarta',
                'dob' => '2010-04-03',
                'religion' => 'Islam',
                'name_parent' => 'Akhlis Suryapati',
                'address' => 'TBI 1, Blok W440 RT07/RW014',
            ],
            [
                'nisn' => '0109083735',
                'name' => 'Ummu Syahidah',
                'class' => 'Kelas 8 A',
                'gender' => 'Laki - Laki',
                'pob' => 'Jakarta',
                'dob' => '2010-04-03',
                'religion' => 'Islam',
                'name_parent' => 'Akhlis Suryapati',
                'address' => 'TBI 1, Blok W440 RT07/RW014',
            ],
        ];

        foreach($karyawans as $karyawan){
            Karyawan::create($karyawan);
        }
    }
}
