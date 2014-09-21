<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class LeaderboardsController extends RestController
{
	public $components = array(
		'Score'
	);
	
	
    function index()
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
    
    function view($user_id = 0)
    {
    	$score = $this->Score->getReputationForUser($user_id);
		
		$this->set(compact('score'));
		
		$this->loadModel('User');
		$user = $this->User->findById($user_id);
		$this->set(compact('user'));
    }
}
