<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentStatus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'active'
    ];

    public static function updateStatus($request, $id) {
        DB::table('payment_statuses')
                ->where('id', $id)
                ->update([
                    'name' => $request['name'],
                    'description' => $request['description'],
                    'active' => $request['active']
                ]);
    }
}
