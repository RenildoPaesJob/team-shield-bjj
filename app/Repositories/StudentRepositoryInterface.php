<?php

namespace App\Repositories;

use App\DTO\{
	CreateStudentDTO,
	UpdateStudentDTO
};

use stdClass;

interface StudentRepositoryInterface
{
	public function getAll(string $filter): array;
	public function findOne(string $id): stdClass|null;
	public function remove(string $id): void;
	public function new(CreateStudentDTO $dto): stdClass;
	public function update(UpdateStudentDTO $dto): stdClass|null;
}
