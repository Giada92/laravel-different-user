<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            'Pizzeria',
            'Ristorante da Anna'
        ];

        //$tags = ['frontend', 'backend', 'ux', 'ui'];

        foreach ($restaurants as $restaurant) {
            $newRestaurant = new Restaurant();
           
            $newRestaurant->name = $restaurant;
            $newRestaurant->save();
        }
    }
}
