<?php namespace App\Components\CMW\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Faker;

class TimeslotsController extends Controller
{
    private $durations = array(15, 30, 45, 60);

    /**
     *  Return json with fake timeslots.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $timeslots = $this->generateFakeTimeslots();

        return response()->json($timeslots);
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
        $timeslots = $this->generateFakeTimeslots();

        if ($id > count($timeslots) || $id < 1)
        {
            return response()->json(array('errors' => 'Timeslot not found!'), 404);
        }

        return response()->json($timeslots[$id - 1]);
    }

    /**
     *  Generate fake timeslots.
     *
     * @return array
     */
    private function generateFakeTimeslots()
    {
        $timeslots = array();

        $faker = Faker\Factory::create();
        $faker->seed(1);

        for ($i = 0; $i < 40; $i++)
        {
            $timeslots[] = array(
                'id'           => $i + 1,
                'carId'        => $faker->numberBetween(1, 10),
                'duration'     => $this->durations[$faker->numberBetween(0, 3)],
                'date'         => Carbon::now()->addDay($faker->numberBetween(1, 3))->format('d.m.y'),
                'time'         => $faker->time('H:00'),
                'location'     => $faker->address,
                'reserved'     => $faker->boolean(20),
                'contactEmail' => $faker->companyEmail());
        }

        return $timeslots;
    }
}