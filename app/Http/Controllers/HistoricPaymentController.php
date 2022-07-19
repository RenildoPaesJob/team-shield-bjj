<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoricPaymentRequest;
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
        $dateNow        = Carbon::now('America/Sao_Paulo');
        $dateVenciment  = Carbon::now('America/Sao_Paulo')->addDay(30);
        $alunos         = Aluno::all();
        $statuses       = PaymentStatus::all();

        return view('layouts.historic.create-historic-payment', compact('alunos', 'statuses', 'dateNow', 'dateVenciment'));
    }

    public function store(HistoricPaymentRequest $request){
        // dd($request->all());
        HistoricPayment::create($request->all());
        return redirect()->route('historic.index');
    }
}
