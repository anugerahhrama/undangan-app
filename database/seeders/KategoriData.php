<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'kategori' => 'pernikahan',
            ],
            [
                'kategori' => 'seminar',
            ],
            [
                'kategori' => 'rapat',
            ],
            [
                'kategori' => 'ulang tahun',
            ],
        ];

        foreach($kategori as $key => $value){
            Kategori::create($value);
        }
    }
}
