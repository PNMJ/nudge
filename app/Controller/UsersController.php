<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends RestController
{
	public function signup()
	{
		if (!empty($this->request->data)) {
		
			// hash the password
			$this->request->data['password'] = Security::hash($this->request->data['password'], 'sha1', true);
		
			$this->User->create();
			$user = $this->User->save($this->request->data);
			if ($user !== false) {
				// successful signup
				//$this->Session->setFlash('Your account has been created!');
				
				$this->redirect(array('action' => 'signin'));
				
			} else {
				// could not sign up
				$this->Session->setFlash('Your account could not be created. Please, try again.', 'default', array('class' => 'message warning'));
			}
		}
		
	    $this->layout = 'minimal';
	}
	
	function signin()
	{
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	            $this->Session->setFlash(
	                __('Username or password is incorrect'),
	                'default',
	                array(),
	                'auth'
	            );
	        }
	    }
	    
	    $this->layout = 'minimal';
	}
	
	function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
}
