<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     *  Fake store reservation slot
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        $validationErrors = $this->getValidationErrors($request->all());

        if(count($validationErrors) > 0)
        {
            return response()->json(array('errors' => $validationErrors), 400);
        }

        return response()->json(array('status' => 'success'));
    }

    private function getValidationErrors($data)
    {
        $errors = array();

        if(!isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL))
        {
            $errors[] = array('type' => 'email', 'message' => 'A valid email is required.');
        }

        if(!isset($data['timeslotId']) || !filter_var($data['timeslotId'], FILTER_VALIDATE_INT))
        {
            $errors[] = array('type' => 'timeslotId', 'message' => 'A valid timeslotId is required.');
        }

        return $errors;
    }
}