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

        $categories[] = array('id' => 1, 'category' => 'Big toys');
        $categories[] = array('id' => 2, 'category' => 'Medium toys');
        $categories[] = array('id' => 3, 'category' => 'Small toys');
        $categories[] = array('id' => 4, 'category' => 'Games');

        return $categories;
    }
}