<?php

namespace App\Http\Controllers;

use App\DTO\CreatePaymentDTO;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use App\Models\Student;
use App\Services\PaymentService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PaymentController extends Controller
{
	public function __construct(
		protected PaymentService $service
	){}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
		$payments = $this->service->getAll($request->filter);
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
		$request->payment_date = Carbon::parse(Carbon::now())->format('Y-m-d');
		$this->service->new(
			CreatePaymentDTO::makeFromRequest($request)
		);

		return redirect()->route('payment.index');
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
