<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'telphone',
        'belt',
        'type',
        'active'
    ];

    public static function updateAluno($request, $id) {
        DB::table('alunos')
                ->where('id', $id)
                ->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'telphone' => $request['telphone'],
                    'belt' => $request['belt'],
                    'type' => $request['type'],
                    'active' => $request['active']
                ]);
    }
}
