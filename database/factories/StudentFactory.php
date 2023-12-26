<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'name'              => fake()->name(),
			'lastname'          => fake()->name(),
			'email'             => fake()->unique()->safeEmail(),
			'smartphone'        => fake()->unique()->randomNumber(9, 11),
			'date_birth'        => fake()->dateTimeThisCentury()->format('Y-m-d'),
			'belt'              => fake()->name('belt'),
			'graduation'        => fake()->unique()->randomNumber(9),
		];
	}
}
