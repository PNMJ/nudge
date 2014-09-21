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
		$liked_points = 10;
		$purchased_points = 10;
	
		// show a leaderboard for all the user's and their reputations
		$this->loadModel('User');
		$users = $this->User->find('all');
		
		$leaderboard = array();
		foreach($users as $user){
			$score = 0;
			
			foreach($user['Nudge'] as $nudge){
				if($nudge['liked'] == 'yes'){
					$score += $liked_points;
				}
				if($nudge['purchased'] == true){
					$score += $purchased_points;
				}
			}
			
			$leaderboard[$user['User']['name']] = $score;
		}
		
		$this->set(compact('leaderboard'));
		
	}
}
