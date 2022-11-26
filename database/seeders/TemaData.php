<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tema = [
            [
                'nama_tema' => 'pernikahan',
                'tema' => 'fasfdsfsfd',
            ],
            [
                'nama_tema' => 'pernikahan2',
                'tema' => 'fasfdsfsfd',
            ],
            [
                'nama_tema' => 'pernikahan3',
                'tema' => 'fasfdsfsfd',
            ],
        ];

        foreach($tema as $key => $value){
            Tema::create($value);
        }
    }
}
