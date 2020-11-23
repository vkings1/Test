<?php

namespace Database\Factories;

use App\Models\Transactions;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transactions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $int = rand(1262055681, 1262055681);
        $string = date("Y-m-d H:i:s", $int);
        return [
            'garage_id' => '1',
            'start_time' =>  $string,
            'end_time' =>  $string,
            'total' => '10',
            'car_in_by_user_id' => 1,
            'car_out_by_user_id' => 1,
        ];
    }
}
