<?php

namespace App\DTO;

use App\Http\Requests\StudentRequest;

class CreateStudentDTO
{
	public function __construct(
		public string $name,
		public string $lastname,
		public string $email,
		public string $smartphone,
		public string $date_birth,
		public string $belt,
		public string $graduation
	) { }

	public static function makeFromRequest(StudentRequest $request): self
	{
		return new self(
			$request->name,
			$request->lastname,
			$request->email,
			$request->smartphone,
			$request->date_birth,
			$request->belt,
			$request->graduation
		);
	}
}
