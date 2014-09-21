<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class NudgesController extends RestController
{
	public $components = array(
		'ProductManager'
	);
	
	// send a nudge to a 
	function give($request_id = 0, $product_uuid = 0)
	{
		$this->loadModel('Product');
		
		if ($product_uuid != 0) {
			$product = $this->Product->find('first', array(
				'conditions' => array('uuid' => $product_uuid)
			));
			
	        $this->Nudge->create();
	        $this->Nudge->save(array(
	        	'user_id' => $this->Auth->user('id'),
	        	'product_id' => $product['Product']['id'],
	        	'request_id' => $request_id
	        ));
	        
	        return $this->redirect('/nudges/mine');
	    }
	    
	    // get the request
	    $this->loadModel('Request');
	    $request = $this->Request->findById($request_id);
	    $this->set(compact('request'));
	    
	    // products for that request
	    $category = $request['Category']['name'];
	    $products = $this->ProductManager->getProductsWithCategory($category);
		$this->set(compact('products'));
		
		// store the products
		foreach($products as $products){
			// look for the uuid
			$product = $this->Product->find('first', array(
				'conditions' => array('uuid' => $products['uuid'])
			));
			
			if(!empty($product)){
				// found
				continue;
			}
			
			$this->Product->create();
			$this->Product->save($products);
		}
	}
	
	function opinion($nudge_id = 0, $liked = '')
	{
		$nudge = $this->Nudge->read(null, $nudge_id);
		
		if($liked == 'like'){
			$this->Nudge->set('liked', 'yes');
			$this->Nudge->save();
		
		} else if($liked == 'dislike'){
			$this->Nudge->set('liked', 'no');
			$this->Nudge->save();
			
			
		} else if($liked == 'buy'){
			$this->Nudge->set('purchased', 'yes');
			$this->Nudge->save();
			
			$this->redirect($nudge['Product']['referenceURL']);
		}
		
		$this->redirect('/nudges/review/'.$nudge['Request']['id']);
	}
	
	function review($request_id = 0, $liked = '')
	{
		// get all nudges for the request
		$nudges = $this->Nudge->find('all', array(
			'conditions' => array(
				'request_id' => $request_id,
				'Nudge.user_id' => $this->Auth->user('id')
			)
		));
		$this->set(compact('nudges'));
		
		// get the request
		$this->loadModel('Request');
	    $request = $this->Request->findById($request_id);
	    $this->set(compact('request'));
	}

    function mine()
    {
	    // get all of my nudges
	    $this->Nudge->recursive = 2;
	    $nudges = $this->Nudge->find('all', array(
	    	'conditions' => array('Nudge.user_id' => $this->Auth->user('id'))
	    ));
	    $this->set(compact('nudges'));
    }

	function find()
	{
		// list all requests that this user can nudge on
		$nudges = $this->Nudge->find('all', array(
			'conditions' => array(
				'user_id' => '!= '.$this->Auth->user('id')
			),
			'limit' => 16
		));
		$this->set(compact('nudges'));
	}
}
