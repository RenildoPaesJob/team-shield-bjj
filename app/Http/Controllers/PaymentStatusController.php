<?php

namespace App\Http\Controllers;

use App\Models\PaymentStatus;
use Illuminate\Http\Request;

class PaymentStatusController extends Controller
{
    public function index()
    {
        $payments = PaymentStatus::get();
        // dd($alunos);

        return view('layouts.payment.list-payment', compact('payments'));
    }

    public function create()
    {
        return view('layouts.payment.create-payment');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        PaymentStatus::create($request->all());

        return redirect()->route('payment.index');
        // dd($request->all());
    }

    public function show($id)
    {
        // $aluno = Aluno::where('id', $id)->first();
        $payment = PaymentStatus::find($id);

        //if is null
        if(is_null($payment)){
            return redirect()->route('payment.index');
        }

        return view('layouts.payment.show-payment', compact('payment'));
    }
}
