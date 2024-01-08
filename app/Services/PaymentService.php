<?php

namespace App\Services;

use App\DTO\CreatePaymentDTO;
use stdClass;

class PaymentService
{
	protected $repository;

	public function __construct()
	{
		# code...
	}

	public function getAll(String $filter = null): array
	{
		return $this->repository->getAll($filter);
	}

	public function findOne(String $id): stdClass|null
	{
		return $this->repository->findOne($id);
	}

	public function New(CreatePaymentDTO $dto): stdClass
	{
		return $this->repository->new($dto);
	}

	public function remove(String $id): void
	{
		$this->repository->remove($id);
	}
}
