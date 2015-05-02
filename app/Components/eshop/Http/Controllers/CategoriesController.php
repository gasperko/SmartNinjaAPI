<?php namespace App\Components\eshop\Http\Controllers;

use App\Components\eshop\Category;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    /**
     *  Return json with categories.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $category = new Category();
        return response()->json($category->getCategories());
    }
}