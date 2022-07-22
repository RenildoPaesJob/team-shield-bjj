<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'name'      => 'Lolis Paes da Silva',
            'email'     => 'lolispaessilva@gmail.com',
            'telphone'  => '(61) 9 9999-8888',
            'type'      => 'Academia',
            'belt'      => 'Preta',
            'active'    => 1
        ]);
    }
}
