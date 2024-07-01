<?php

require_once(__DIR__ . '/Message.php');

class OrderApply extends Message
{

    public function __construct($post)
    {
        parent::__construct($post);

    }

    protected function set_message()
    {
		      
        $this->message = '<p>' . __('Name', 'millturn') . ': ' . $this->post['name'] . '</p><p>' . __('Phone', 'millturn') . ': ' . $this->post['tel'] . '</p>';
        
        
	}




}

