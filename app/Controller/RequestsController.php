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
	// submit a new request
	function submit()
    {
    	if ($this->request->is('post')) {
	        $category_id = $this->request->data['Request']['category'];
	        
	        $answers = array();
	        foreach($this->request->data['Request'] as $key=>$answer){
	        	$question_id = substr($key, 9);
	        	
	        	if(empty($question_id)){
		        	continue;
	        	}
	        	
	        	$answers[] = array(
	        		'question_id' => $question_id,
	        		'answer' => $answer
	        	);
	        }
	        
	        // create the request
	        $this->Request->create();
	        $this->Request->save(array(
	        	'user_id' => $this->Auth->user('id'),
	        	'category_id' => $category_id
	        ));
	        
	        $this->loadModel('requestsQuestion');
	        foreach($answers as $answer){
		        $this->requestsQuestion->create();
		        $this->requestsQuestion->save(array(
		        	'request_id' => $this->Request->id,
		        	'question_id' => $answer['question_id'],
		        	'answer' => $answer['answer']
		        ));
	        }
	        
	        return $this->redirect('/requests/mine');
	    }
    
	    // get questions
	    $this->loadModel('Question');
	    $questions = $this->Question->find('all', array(
	    	'limit' => 3,
	    	'order' => 'RAND()'
	    ));
	    $this->set(compact('questions'));
	    
	    // get categories
	    $this->loadModel('Category');
	    $categories = $this->Category->find('list');
	    $this->set(compact('categories'));
    }
    
    function mine()
    {
	    // get all of my requests
	    $requests = $this->Request->find('all', array(
	    	'conditions' => array('user_id' => $this->Auth->user('id')) 
	    ));
	    
	    $status = array();
	    
	    foreach($requests as &$request){
	    	// if no nudges, then bad
	    	if(count($request['Nudge']) == 0){
		    	$status[$request['Request']['id']] = 'bad';
		    	continue;
	    	}
	    	
	    	// if there exists one that is liked
	    	$found = false;
	    	foreach($request['Nudge'] as $nudge){
		    	if($nudge['liked'] == 'yes' || $nudge['purchased'] == true){
			    	$found = true;
			    	$status[$request['Request']['id']] = 'good';
		    	}
	    	}
	    	
	    	if(!$found){
				// set to neutral
		    	$status[$request['Request']['id']] = 'neutral';
	    	}
	    }
	    
	    $this->set(compact('requests'));
	    $this->set(compact('status'));
    }
    
    function find()
    {
	    // get all requests that aren't mine
	    $requests = $this->Request->find('all', array(
	    	'conditions' => array('user_id !=' => $this->Auth->user('id')),
	    	'order' => array('Request.created DESC'),
	    	'limit' => 20
	    ));
	    $this->set(compact('requests'));
    }
}
