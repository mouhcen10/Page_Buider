<?php

namespace Database\Factories;

use App\Models\Funnel;
use Illuminate\Database\Eloquent\Factories\Factory;

class FunnelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funnel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word(),
            'name' => $this->faker->name(),
            'tag' => $this->faker->word(),
            'logo' => $this->faker->imageUrl($width = 220, $height = 180),
            'subdomain' => $this->faker->email(),
            'steps' => $this->faker->word(),
        ];
    }
}
