<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
	protected $fillable = [
        'student_id',
		'payment_date',
		'amount_paid',
		'reference_month',
		'payment_method',
		'notes'
	];

	public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
