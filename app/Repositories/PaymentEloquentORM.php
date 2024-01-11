<?php

namespace App\Repositories;

use App\DTO\CreatePaymentDTO;
use App\Models\Payment;
use stdClass;

class PaymentEloquentORM implements PaymentRepositoryInterface
{
	public function __construct(
		protected Payment $model
	) {
	}

	public function getAll(string $filter = null): array
	{
		return $this->model->with('student')->get()->toArray();
	}

	public function findOne(string $id): stdClass|null
	{
		$student =  $this->model->find($id);
		if(!$student){
			return null;
		}
		return (object) $student->toArray();
	}

	public function remove(string $id): void
	{
		$this->model->findOrFail($id)->delete();
	}

	public function new(CreatePaymentDTO $dto): stdClass
	{
		$student = $this->model->create(
			(array) $dto,
		);

		return (object) $student->toArray();
	}
}
