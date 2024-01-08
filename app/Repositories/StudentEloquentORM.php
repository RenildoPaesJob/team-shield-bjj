<?php

use App\DTO\CreateStudentDTO;
use App\DTO\UpdateStudentDTO;
use App\Repositories\StudentRepositoryInterface;
use App\Models\Student;

class StudentEloquentORM implements StudentRepositoryInterface
{
	public function __construct(
		protected Student $model
	) {
	}

	public function getAll(string $filter): array
	{
		return $this->model
					->where(function ($query) use ($filter){
						if($filter){
							$query->where('name', 'like', "%$filter%");
							$query->orWhere('email', 'like', "%$filter%");
						}
					})
					->all()
					->toArray();
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
		return $this->model->findOrFail($id)->delete();
	}

	public function new(CreateStudentDTO $dto): stdClass
	{
		$student = $this->model->create(
			(array) $dto
		);

		return (object) $student->toArray();
	}

	public function update(UpdateStudentDTO $dto): stdClass|null
	{
		if(!$student = $this->model->find($dto->id)){
			return null;
		}

		$student->update(
			(array) $dto
		);

		return (object) $student->toArray();
	}
}
