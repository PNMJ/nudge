<?php
App::uses('RestController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class  NudgesController extends RestController
{
    function mine()
    {
	    // get all of my nudges
    }

	function find()
	{
		// list all requests that this user can nudge on
	}
}
