<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company(),
            'company_description' => $this->faker->text(100),
            'company_services' => $this->faker->text(50),
            'company_clients' => $this->faker->text(50),
            'company_management_team' => $this->faker->text(50),
            'company_address' => $this->faker->address,
            'company_contact' => $this->faker->email(),

        ];
    }
}
