<?php

use App\Models\Tour;
use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = config('db.tours');
        foreach ($tours as $tour) {
            $new_tour = new Tour();
            $new_tour->duration = $tour['duration'];
            $new_tour->image = $tour['image'];
            $new_tour->location = $tour['location'];
            $new_tour->date_start = $tour['date_start'];
            $new_tour->date_return = $tour['date_return'];
            $new_tour->is_avaible = $tour['is_avaible'];
            $new_tour->number_posts_avaible = $tour['number_posts_avaible'];
            $new_tour->type_tour = $tour['type_tour'];
            $new_tour->price = $tour['price'];
            $new_tour->services = $tour['services'];
            $new_tour->description = $tour['description'];
            $new_tour->save();
        }
    }
}
