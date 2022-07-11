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
            'name'      => 'Renildo Paes 3',
            'email'     => 'renildo6@gmail.com',
            'telphone'  => '(61) 9 9999-8888)',
            'type'      => 'Academia',
            'belt'      => 'Preta',
            'active'    => 1
        ]);
    }
}
