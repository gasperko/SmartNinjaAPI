<?php namespace App\Components\eshop\Http\Controllers;

use App\Components\eshop\Category;
use App\Components\eshop\Product;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private $category;
    private $products;
    private $request;

    function __construct(Category $category, Product $product, Request $request)
    {
        $this->category = $category;
        $this->products = $product;
        $this->request = $request;
    }

    /**
     *  Return json with categories.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return response()->json($this->category->getCategories());
    }

    /**
     *  Return json with products for the given category.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getProducts($id)
    {
        $categories = $this->category->getCategories();

        if(!$this->validCategory($id, $categories))
        {
            return response()->json(array('errors' => 'Category not found!'), 404);
        }

        $products = $this->getProductsByCategory($id);

        $products = $this->filterByName($products, $this->request->get('query'));
        $products = $this->filterByStock($products, $this->request->get('onlyStocked'));

        return response()->json($products);
    }

    private function validCategory($id, $categories)
    {
        foreach ($categories as $category)
        {
            if($category['id'] == $id) return true;
        }

        return false;
    }

    private function getProductsByCategory($id)
    {
        $products = $this->products->getProducts();
        $result = array();

        foreach($products as $product)
        {
            if($product['categoryId'] == $id) $result[] = $product;
        }

        return $result;
    }


}