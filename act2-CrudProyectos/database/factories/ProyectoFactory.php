<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *s
     * @var string
     */
    protected $model = Proyecto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->paragraph,
            'categoria' => $this->faker->randomElement(['Desarrollo de Aplicaciones','Equipamiento','Mejora', 'Ampliación', 'Reposición']),
            'precio' => $this->faker->randomFloat(2,10000,150000),
            'estado' => $this->faker->randomElement(['Terminado','En Pausa','En desarrollo', 'Cancelado']),
        ];
    }
}
