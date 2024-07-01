<?php

require_once(__DIR__ . '/Message.php');

class OrderMessage extends Message
{

    public function __construct($post)
    {
        parent::__construct($post);

    }

    protected function set_message()
    {
		      
        $this->message = '<p>' . __('Name', 'millturn') . ': ' . $this->post['name'] . '</p>';
        $this->message .= '<p>' . __('Phone', 'millturn') . ': ' . $this->post['tel'] . '</p>';
        $this->message .= '<p>' . __('Email', 'millturn') . ': ' . $this->post['email'] . '</p>';
        $this->message .= '<p>' . __('Message', 'millturn') . ': ' . $this->post['message'] . '</p>';

        
	}




}

