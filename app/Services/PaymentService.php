<?php

namespace App\Services;

use App\DTO\CreatePaymentDTO;
use App\Repositories\PaymentRepositoryInterface;
use stdClass;

class PaymentService
{

	public function __construct(
		protected PaymentRepositoryInterface $repository
	) {
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
