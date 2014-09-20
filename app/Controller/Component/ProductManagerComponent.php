<?php

App::uses('Component', 'Controller');

class ProductManagerComponent extends Component
{


    public function getProductsWithCategory($category = '')
    {
    	$products = array();


		$products = array(
			'John',
			'Blum',
			'Is',
			'A',
			'Popsicle'
		);

        return $products;
    }
}
