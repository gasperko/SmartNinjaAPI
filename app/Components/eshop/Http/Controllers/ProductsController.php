<?php namespace App\Components\eshop\Http\Controllers;

use App\Components\eshop\Category;
use App\Components\eshop\Product;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $products = $this->products->getProducts();
        $products = $this->filterByName($products, $request->get('query'));
        $products = $this->filterByStock($products, $request->get('onlyStocked'));
        $products = $this->filterByOnSale($products, $request->get('onlyOnSale'));

        return response()->json($products);
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