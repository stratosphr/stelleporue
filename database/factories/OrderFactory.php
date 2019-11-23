<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
    
    use App\Client;
    use App\Order;
    use Carbon\Carbon;
    use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'client_id' => Client::all()->random(),
        'delivery_date' => Carbon::now()->addDays(rand(0, 365))->addHours(rand(0, 24))
    ];
});
