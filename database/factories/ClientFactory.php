<?php
    
    /** @var Factory $factory */
    
    use App\Address;
    use App\Client;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    
    $factory->define(Client::class, function (Faker $faker) {
        return [
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'address_id' => Address::all()->random()
        ];
    });
