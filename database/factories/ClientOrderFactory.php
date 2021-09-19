<?php

namespace Database\Factories;

use App\Models\ClientOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientOrderFactory extends Factory
{
    protected $model = ClientOrder::class;

    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'full_name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'create_app' => 'true',
            'seo' => 'false',
            'mvp' => 'false',
        ];
    }
}
