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
		'Product'
	);
	
    function ebay($category = '')
    {
	    $products = $this->Product->getProductsWithCategory($category);
	    
	    debug($products);
    }
}
