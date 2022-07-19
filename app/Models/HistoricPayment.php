<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id',
        'payment_date',
        'finish_payment_date',
        'payment_statuses_id',
        'value'
    ];
}
