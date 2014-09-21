<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class RequestsController extends RestController
{
    function submit()
    {
	    // submit a new request
	    
	    // get questions
	    $this->loadModel('Question');
	    $questions = $this->Question->find('all', array(
	    	'limit' => 3,
	    	'order' => 'RAND()'
	    ));
	    $this->set(compact('questions'));
	    
	    
    }
    
    function mine()
    {
	    // get all of my requests
    }
}
