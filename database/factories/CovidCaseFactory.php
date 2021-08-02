<?php

namespace Database\Factories;

use App\Models\CovidCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidCaseFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = CovidCase::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'cases' => $this->faker->randomNumber(2),
            'report_date' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
