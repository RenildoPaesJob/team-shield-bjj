<?php

namespace App\DTO;

use App\Http\Requests\StudentRequest;

class UpdateStudentDTO
{
	public function __construct(
		public string $id,
		public string $name,
		public string $lastname,
		public string $email,
		public string $smartphone,
		public string $date_birth,
		public string $belt,
		public string $graduation
	) { }

	public static function makeFromRequest(StudentRequest $request, $id): self
	{
		return new self(
			$id,
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
