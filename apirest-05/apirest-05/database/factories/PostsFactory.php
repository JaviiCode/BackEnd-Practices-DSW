<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'cuerpo' => $this->faker->paragraphs(1, true),
            'imagen' => $this->faker->imageUrl(),
            'usuario_id' => Usuario::factory(),
            'categoria_id' => Categoria::factory(),
        ];
    }
}
