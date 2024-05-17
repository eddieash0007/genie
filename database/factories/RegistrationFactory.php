<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'other_name' => $this->faker->lastName,
            'staff_id' => $this->faker->unique()->text($maxNbChars = 10),
            'employment_status' => $this->faker->randomElement($array = array ('Permanent','Contract','National Service')),
            'unit' => $this->faker->randomElement($array = array ('Loans','Account Opening / Maintenance','Quality Control','Monitoring and Support','Payments','Clearing','Account Opening / Maintenance / CSD','Loans / Account Openinng / Maintenance')),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'grade' => $this->faker->randomElement($array = array ('4','5','6','7','8','9','10')),
            'contact' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'c_p_name' => $this->faker->name,
            'c_p_tel' => $this->faker->phoneNumber,
        ];
    }

   
}
