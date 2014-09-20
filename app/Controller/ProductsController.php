<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends RestController
{
	public $components = array(
		'ProductManager'
	);

    function ebay($category = '')
    {
	    $products = $this->ProductManager->getProductsWithCategory($category);

	    debug($products);
    }
}
