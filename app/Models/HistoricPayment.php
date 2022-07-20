<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_aluno',
        'payment_date',
        'finish_payment_date',
        'name_payment_statuses',
        'valor'
    ];

    protected $cast = [
        'payment_date' => 'date:d-m-Y'
    ];
}
