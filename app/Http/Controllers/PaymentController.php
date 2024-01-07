<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with('student')->get();
		return Inertia::render('Payment/Payment', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$students = Student::select('id', 'name')->get();
		return Inertia::render('Payment/NewPayment', [
			'students' => $students
		]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request): RedirectResponse
    {
		$payment = Payment::create([
			'student_id'      => $request->student_id,
			'payment_date'    => Carbon::parse(Carbon::now())->format('Y-m-d'),
			'amount_paid'     => $request->amount_paid,
			'reference_month' => $request->reference_month,
			'payment_method'  => $request->payment_method,
			'notes'           => $request->notes
        ]);

		return redirect()->route('payment.index')->with('status', $payment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::with('student')->find($id);
		return Inertia::render('Payment/ShowPayment',  [
			'payment' => $payment
		]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $payment = Payment::with('student')->find($id);
		// return Inertia::render('Payment/EditPayment',  [
		// 	'payment' => $payment
		// ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
