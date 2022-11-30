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
                'nama_tema' => 'Tema 1',
                'tema' => 'Tema 1',
            ],
            [
                'nama_tema' => 'Tema 2',
                'tema' => 'Tema 2',
            ],
            [
                'nama_tema' => 'Tema 3',
                'tema' => 'Tema 3',
            ],
        ];

        foreach($tema as $key => $value){
            Tema::create($value);
        }
    }
}
