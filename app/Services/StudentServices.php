<?php

namespace App\Services;

use App\DTO\CreateStudentDTO;
use App\DTO\UpdateStudentDTO;
use App\Repositories\StudentRepositoryInterface;
use stdClass;

class StudentServices
{

	public function __construct(
		protected StudentRepositoryInterface $repository
	){}

	public function getAll(String $filter = null): array
	{
		return $this->repository->getAll($filter);
	}

	public function findOne(String $id): stdClass|null
	{
		return $this->repository->findOne($id);
	}

	public function New(CreateStudentDTO $dto): stdClass
	{
		return $this->repository->new($dto);
	}

	public function update(UpdateStudentDTO $dto): stdClass|null
	{
		return $this->repository->update($dto);
	}

	public function remove(String $id): void
	{
		$this->repository->remove($id);
	}
}