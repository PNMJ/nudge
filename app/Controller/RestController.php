<?php

App::uses('AppController', 'Controller');

class RestController extends AppController
{
	public function index()
    {
    	$this->{$this->modelClass}->recursive = 0;
    
		$name = Inflector::pluralize($this->modelKey);
    
        $items = $this->{$this->modelClass}->find('all');
        
        $this->set(array(
            $name => $items,
            '_serialize' => array($name)
        ));
    }

    public function view($id)
    {
    	$name = $this->modelKey;
    
        $item = $this->{$this->modelClass}->findById($id);
        $item = array_shift($item);
        
        $this->set(array(
            $name => $item,
            '_serialize' => array($name)
        ));
    }

    public function edit($id)
    {
        $this->{$this->modelClass}->id = $id;
        if ($this->{$this->modelClass}->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id)
    {
        if ($this->{$this->modelClass}->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}