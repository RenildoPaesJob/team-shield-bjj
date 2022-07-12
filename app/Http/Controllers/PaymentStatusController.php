<?php

namespace App\Http\Controllers;

use App\Models\PaymentStatus;
use Illuminate\Http\Request;

class PaymentStatusController extends Controller
{
    public function index()
    {
        $payments = PaymentStatus::get();

        return view('layouts.payment.list-payment', compact('payments'));
    }

    public function create()
    {
        return view('layouts.payment.create-payment');
    }

    public function store(Request $request)
    {
        PaymentStatus::create($request->all());

        return redirect()->route('payment.index');
    }

    public function show($id)
    {
        $payment = PaymentStatus::find($id);

        if(is_null($payment)){
            return redirect()->route('payment.index');
        }

        return view('layouts.payment.show-payment', compact('payment'));
    }

    public function edit($id)
    {
        $payment = PaymentStatus::find($id);

        if (!$payment) {
            return redirect()->route('payment.index');
        }

        return view('layouts.payment.edit-payment', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        PaymentStatus::find($id);

        PaymentStatus::updateStatus($request, $id);

        return redirect()->route('payment.index');
    }

    public function destroy($id)
    {
        $payment = PaymentStatus::find($id);

        if (!$payment) {
            return redirect()->route('payment.index');
        }

        $payment->delete();

        return redirect()->route('payment.index');
    }
}
