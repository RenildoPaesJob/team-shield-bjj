<?php

namespace App\DTO;

use App\Http\Requests\PaymentRequest;

class CreatePaymentDTO
{
	public function __construct(
		public string $student_id,
		public string $payment_date,
		public string $amount_paid,
		public string $reference_month,
		public string $payment_method,
		public string|null $notes
	) { }

	public static function makeFromRequest(PaymentRequest $request): self
	{
		return new self(
			$request->student_id,
			$request->payment_date,
			$request->amount_paid,
			$request->reference_month,
			$request->payment_method,
			$request->notes
		);
	}
}
