<?php namespace App\Components\eshop\Http\Controllers;

use App\Components\eshop\Category;
use App\Components\eshop\Product;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     *  Fake store order.
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

        if(!isset($data['products']) || count($data['products']) == 0)
        {
            $errors[] = array('type' => 'products', 'message' => 'You need at least one product.');
        }
        elseif (count($data['products']) > 0)
        {
            $productErrors = array();

            foreach($data['products'] as $product)
            {
                if(!isset($product['id']))
                {
                    $productErrors[] = array('type' => 'id', 'message' => 'A valid product id is required.');
                }

                if(!isset($product['quantity']) || $product['quantity'] < 1)
                {
                    $productErrors[] = array('type' => 'quantity', 'message' => 'A valid quantity is required.');
                }
            }

            if(count($productErrors) > 0) $errors[] = array('type' => 'products', 'message' => $productErrors);
        }

        if(!isset($data['firstName']))
        {
            $errors[] = array('type' => 'firstName', 'message' => 'A valid first name is required.');
        }

        if(!isset($data['lastName']))
        {
            $errors[] = array('type' => 'lastName', 'message' => 'A valid last name is required.');
        }

        if(!isset($data['address']))
        {
            $errors[] = array('type' => 'address', 'message' => 'A valid address is required.');
        }

        if(!isset($data['country']))
        {
            $errors[] = array('type' => 'country', 'message' => 'A valid country is required.');
        }

        if(!isset($data['city']))
        {
            $errors[] = array('type' => 'city', 'message' => 'A valid city is required.');
        }

        if(!isset($data['zip']))
        {
            $errors[] = array('type' => 'zip', 'message' => 'A valid zip is required.');
        }

        return $errors;
    }
}