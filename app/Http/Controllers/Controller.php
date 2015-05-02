<?php namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     *  Filter collection by name.
     *
     * @param Collection $products
     * @param            $query
     *
     * @return Collection|static
     */
    protected function filterByName(array $products, $query)
    {
        if (!isset($query))
        {
            return $products;
        }

        $products = array_filter($products, function ($item) use ($query)
        {
            if (preg_match('/' . strtolower($query) . '/', strtolower($item['name'])))
            {
                return true;
            }

            return false;
        });

        $products = array_values($products);

        return $products;
    }


    /**
     *  Filter collection by stock.
     *
     * @param Collection $products
     * @param            $onlyStocked
     *
     * @return Collection|static
     */
    protected function filterByStock($products, $onlyStocked)
    {
        if (!isset($onlyStocked) || !$onlyStocked)
        {
            return $products;
        }

        $products = array_filter($products, function ($item)
        {
            if ($item['stock'] == 0)
            {
                return false;
            }

            return true;
        });

        $products = array_values($products);

        return $products;
    }
}
