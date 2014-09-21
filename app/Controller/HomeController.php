<?php

App::uses('AppController', 'Controller');


class HomeController extends AppController
{
	function index()
	{
		if (!$this->Auth->loggedIn()) {
		    $this->redirect('/users/signup');
		}

		// home page
	}
}
