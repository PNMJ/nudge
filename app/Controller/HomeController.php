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
	
	function leaderboard()
	{
		// show a leaderboard for all the user's and their reputations
	}
}
