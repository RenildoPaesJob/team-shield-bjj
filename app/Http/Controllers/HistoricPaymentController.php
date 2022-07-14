<?php

namespace App\Http\Controllers;

use App\Models\HistoricPayment;
use Illuminate\Http\Request;

class HistoricPaymentController extends Controller
{
    public function index(){
        $historic = HistoricPayment::get();
        return view('layouts.historic.list-historic-payment', compact('historic'));
    }

    public function create(){
        return view('layouts.historic.create-historic-payment');
    }
}
