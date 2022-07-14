<?php

namespace App\Http\Controllers;

use App\Models\HistoricPayment;
use Illuminate\Http\Request;

class HistoricPaymentController extends Controller
{
    public function index(){
        $historics = HistoricPayment::get();
        return view('layouts.historic.list-historic-payment', compact('historics'));
    }

    public function create(){
        $alunos = Aluno::get();
        return view('layouts.historic.create-historic-payment');
    }
}
