<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		Schema::create('payments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('student_id');
			$table->date('payment_date');
			$table->decimal('amount_paid', 8, 2);
			$table->date('reference_month');
			$table->string('payment_status');
			$table->string('payment_method');
			$table->text('notes')->nullable();
			$table->timestamps();

			$table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payments', function (Blueprint $table) {
			$table->dropForeign(['student_id']);
		});

		Schema::dropIfExists('payments');
	}
};
