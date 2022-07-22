<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoricPaymentRequest;
use App\Models\{
    Aluno,
    HistoricPayment,
    PaymentStatus
};
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoricPaymentController extends Controller
{
    public function index(){
        $historics = HistoricPayment::all();
        // $historics->only(['payment_date']);
        // foreach($historics as $h){
        //     $dateFormat = $h->only([
        //         'payment_date'
        //     ]);

        //     // dd(date_format($dateFormat, 'd/m/Y H:i:s'));
        //     dd($h->isoFormat('dddd D'));
        // }
        // $date_payment = $historics['payment_date'];
        return view('layouts.historic.list-historic-payment', compact('historics'));
    }

    public function create(){
        $dateNow        = Carbon::now('America/Sao_Paulo');
        $dateVenciment  = Carbon::now('America/Sao_Paulo')->addDay(30);
        $alunos         = Aluno::all();

        return view('layouts.historic.create-historic-payment', compact('alunos', 'dateNow', 'dateVenciment'));
    }

    public function store(HistoricPaymentRequest $request){
        // dd($request->all());
        HistoricPayment::create($request->all());
        return redirect()->route('historic.index');
    }

    public function show($historic_id){
        $historic = HistoricPayment::find($historic_id);

        return view('layouts.historic.show-historic', compact('historic'));
    }
}
