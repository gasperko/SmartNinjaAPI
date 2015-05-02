<?php namespace App\Components\eshop\Http\Controllers;

use App\Components\eshop\Category;
use App\Components\eshop\Product;
use App\Http\Controllers\Controller;


class ProductsController extends Controller
{
    private $products;

    function __construct(Product $products)
    {
        $this->products = $products;
    }

    /**
     *  Return json with all products.
     *
     * @param Product $products
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return response()->json($this->products->getProducts());
    }

    /**
     *  Return specific fake product.
     *
     * @param         $id
     *
     * @param Product $product
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show($id)
    {
        $products = $this->products->getProducts();

        if ($id > count($products) || $id < 1)
        {
            return response()->json(array('errors' => 'Product not found!'), 404);
        }

        return response()->json($products[$id - 1]);
    }
}