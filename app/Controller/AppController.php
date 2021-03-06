<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	public $components = array(
		'Auth',
		'Session',
		'Cookie',
		'Paginator',
		//'Security',
		'RequestHandler',
		'Score'
	);
	
	public $helpers = array(
		'Form',
		'Html',
		'Session',
		'Text',
		'Js'
	);
	
	public function beforeFilter()
	{
	    parent::beforeFilter();
	    
	    if ($this->Auth->loggedIn()) {
	    	$score = $this->Score->getReputationForUser($this->Auth->user('id'));
		    $this->set('user_reputation', $score);
		}

		$this->Auth->allow();

		// authorize in the controller
		$this->Auth->authorize = 'Controller'; 
	
		// setup authentication
		$this->Auth->authenticate = array(
			'Form' => array(
				'fields' => array(
					'username' => 'email',
					'password' => 'password'
				),
				'userModel' => 'User'
			)
		);
		
		
		// where to go after login
		$this->Auth->loginRedirect = '/';

		// where to go after logout
		$this->Auth->logoutRedirect = '/users/signin';

		// which controller/action handles logins
		$this->Auth->loginAction = '/users/signin';
	}
	
	public function isAuthorized($user = null)
    {
        return true;
    }
}
