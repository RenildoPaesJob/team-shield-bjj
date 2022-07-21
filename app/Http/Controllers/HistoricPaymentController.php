<?php

namespace App\Http\Controllers;

use App\Http\Requests\{
    HistoricPaymentRequest,
    Request
};
use App\Models\{
    Aluno,
    HistoricPayment,
    PaymentStatus
};
use Carbon\{
    Carbon
};

class HistoricPaymentController extends Controller
{
    public function index(){
        $historics = HistoricPayment::all();
        foreach($historics as $h){
            dd(date_format($h->payment_date, 'd/m/Y H:i:s'));
        }
        // $date_payment = $historics['payment_date'];
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
        HistoricPayment::create($request->all());
        return redirect()->route('historic.index');
    }

    public function show($historic_id){
        $historic = HistoricPayment::find($historic_id);

        return view('layouts.historic.show-historic', compact('historic'));
    }
}
