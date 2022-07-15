<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\HistoricPayment;
use App\Models\PaymentStatus;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HistoricPaymentController extends Controller
{
    public function index(){
        $historics = HistoricPayment::get();
        return view('layouts.historic.list-historic-payment', compact('historics'));
    }

    public function create(){
        $date = Carbon::now();
        // $date = Carbon::format($datenow)->addDay(30);
        dd($date);
        $alunos = Aluno::all();
        $statuses = PaymentStatus::all();
        return view('layouts.historic.create-historic-payment', compact('alunos', 'statuses'));
    }
}
