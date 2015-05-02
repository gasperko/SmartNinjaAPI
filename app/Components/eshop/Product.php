<?php namespace App\Components\eshop;

use Carbon\Carbon;
use Faker;

class Product
{
    private $categories;
    private $prices;
    private $faker;

    function __construct(Category $categories, Price $prices)
    {
        $this->categories = $categories;
        $this->prices = $prices;
        $this->faker = Faker\Factory::create();
        $this->faker->seed(1);
    }

    /**
     *  Generate fake products.
     *
     * @return array
     */
    public function getProducts()
    {
        $products = array();

        for ($i = 0; $i < 80; $i++)
        {
            $products[] = $this->generateProduct($i);
        }

        return $products;
    }

    private function generateProduct($i)
    {
        $product = array();

        $product['id'] = ($i + 1);
        $product['categoryId'] = $this->getFakeCategory();
        $product['name'] = $this->faker->firstName;
        $product['color'] = $this->faker->safeColorName;
        $product['tagline'] = $this->faker->sentence(7);
        $product['description'] = $this->faker->paragraph(8);
        $product['brand'] = $this->faker->company;
        $product['price'] = $this->getFakePrice();
        $product['stock'] = $this->faker->numberBetween(0, 6);
        $product['availableOn'] = $this->getAvailability($product);
        $product['image'] = $this->getFakeImage($i);
        $product['onSale'] = $this->faker->boolean(30);

        return $product;
    }

    private function getFakePrice()
    {
        return $this->prices->getPrices()[$this->faker->numberBetween(0, (count($this->prices->getPrices()) - 1))];
    }

    private function getFakeCategory()
    {
        return $this->categories->getCategories()[$this->faker->numberBetween(0, (count($this->categories->getCategories()) - 1))]['id'];
    }

    private function getFakeImage($i)
    {
        $types = array('people', 'transport', 'animals', 'food', 'technics');

        return 'http://lorempixel.com/300/300/' . $types[$i % 5] . '/' . ($i % 8 + 1);
    }

    private function getAvailability($product)
    {
        if($product['stock'] != 0) return null;

        return Carbon::now('CET')->addDays(14)->toDateString();
    }
}