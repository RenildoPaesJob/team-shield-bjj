<?php

namespace App\Repositories;

use App\DTO\{
	CreatePaymentDTO,
	UpdatePaymentDTO
};

use stdClass;

interface PaymentRepositoryInterface
{
	public function getAll(string $filter)       : array;
	public function findOne(string $id)          : stdClass|null;
	public function remove(string $id)           : void;
	public function new(CreatePaymentDTO $dto)   : stdClass;
	public function update(UpdatePaymentDTO $dto): stdClass|null;
}