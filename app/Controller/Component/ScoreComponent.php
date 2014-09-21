<?php

App::uses('Component', 'Controller');

class ScoreComponent extends Component
{
    public function getReputationForUser($user_id = 0)
    {
    	$nudge = ClassRegistry::init('Nudge');
    
		$liked_points = 10;
		$purchased_points = 10;
		
    	$nudge->recursive = 2;
    	$nudges = $nudge->find('all', array(
    		'conditions' => array(
    			'Nudge.user_id' => $user_id
    		)
    	));
    
	    $score = 0;
			
		foreach($nudges as $nudge){
			if($nudge['Nudge']['liked'] == 'yes'){
				$score += $liked_points;
			}
			if($nudge['Nudge']['purchased'] == true){
				$score += $purchased_points;
			}
		}
		
		return $score;
    }
}
