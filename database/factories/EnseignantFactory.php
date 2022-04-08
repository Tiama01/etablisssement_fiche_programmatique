<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignant>
 */
class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

         'Nom' =>$this->faker->sentence(3),
         'Prenom' =>$this->faker->sentence(4),
         'Sexe' =>$this->faker->lexify('M','F'),
         'mail' =>$this->faker->sentence(6),
         'type' =>$this->faker->sentence(8),
         'grade' =>$this->faker->sentence(5),
         'Telephone' =>$this->faker->numerify(12345678),
         'Diplome' =>$this->faker->sentence(7),
        'dateNommom' =>$this->faker->dateTimeBetween(),
        'Rattachement' =>$this->faker->sentence(5),
        'abattement' =>$this->faker->sentence(9),
        ];
    }
}
