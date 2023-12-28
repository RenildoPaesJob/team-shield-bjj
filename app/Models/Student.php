<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
	use HasFactory;
	protected $fillable = [
		'name',
		'lastname',
		'email',
		'smartphone',
		'date_birth',
		'belt',
		'graduation',
	];

	public function payments() : HasMany
	{
		return $this->hasMany(Payment::class);
	}
}
