<?php namespace App\Components\CMW\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker;

class CarsController extends Controller
{
    private $types = array('Hatchback', 'Sedan', 'SUV', 'Jeep');

    /**
     *  Return json with fake cars.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $cars = $this->generateFakeCars();

        return response()->json($cars);
    }

    /**
     *  Return specific fake car.
     *
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show($id)
    {
        $cars = $this->generateFakeCars();

        if ($id > count($cars) || $id < 1)
        {
            return response()->json(array('errors' => 'Car not found!'), 404);
        }

        return response()->json($cars[$id - 1]);
    }

    /**
     *  Generate fake cars.
     *
     * @return array
     */
    private function generateFakeCars()
    {
        $cars = array();

        $faker = Faker\Factory::create();
        $faker->seed(1);

        for ($i = 0; $i < 10; $i++)
        {
            $cars[] = array(
                'id'          => $i + 1,
                'name'        => $faker->firstNameMale,
                'brand'       => 'CMW',
                'type'        => $this->types[$faker->numberBetween(0, 3)],
                'color'       => $faker->colorName,
                'image'       => 'http://lorempixel.com/400/200/transport/' . ($i + 1),
                'description' => $faker->paragraph(4));
        }

        return $cars;
    }
}