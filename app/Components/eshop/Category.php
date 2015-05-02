<?php namespace App\Components\eshop;

class Category
{

    /**
     *  Generate fake categories.
     *
     * @return array
     */
    public function getCategories()
    {
        $categories = array();

        $categories[] = array('id' => 1, 'category' => 'Male plišaste živali');
        $categories[] = array('id' => 2, 'category' => 'Velike plišaste živali');
        $categories[] = array('id' => 3, 'category' => 'Plišasti obeski');
        $categories[] = array('id' => 4, 'category' => 'Knjige in slikanice');

        return $categories;
    }
}