<?php
    
    /** @var Factory $factory */
    
    use App\Address;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    
    $factory->define(Address::class, function (Faker $faker) {
        return [
            'street' => $faker->streetAddress,
            'postCode' => $faker->postcode,
            'city' => $faker->city
        ];
    });
