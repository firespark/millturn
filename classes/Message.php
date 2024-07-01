<?php

require_once(__DIR__ . '/BaseAjax.php');

class Message extends BaseAjax
{
	//protected $from;
	protected $to;
	protected $headers;

	protected $subject;
	protected $message;

	public function __construct($post)
    {
        parent::__construct($post);

        //$this->from = get_option('from');
        
    }

    protected function validate(): bool
    {

        if(!empty($this->post)) {

            if(isset($this->post['name']) && $this->post['name'] !== null && isset($this->post['tel']) && $this->post['tel'] !== null) {

                return true;
            }
            $this->setOutputMessage( __('Please, fill in all required fields', 'millturn') );
            return false;
        }
        return false;

    }

    protected function set_to() {
        $this->to = get_option('admin_email');
    }

    protected function set_headers() {
        $this->headers = 'Content-Type: text/html; charset=UTF-8';
    }

    protected function set_subject() {
        $this->subject = __('Apply from the website', 'millturn') . ' ' . get_bloginfo('name');
    }

    protected function set_message() {
        $this->message = '';
    }

	protected function send_email(): bool {
		      
        return wp_mail( $this->to, $this->subject, $this->message, $this->headers );
	}

	protected function handle() {
        if($this->validate()){

            $this->set_save_post_data();

            $this->set_to();
            $this->set_headers();
            $this->set_subject();
            $this->set_message();

            if ($this->send_email()) {
                $this->setSuccess();
                $this->setOutputMessage( __('Thank you! Your message is delivered. We will contact you soon', 'millturn') );
            }
            else {
                $this->setOutputMessage( __('Errors occurred during script execution. Please inform the site administrator about this issue', 'millturn') );
            }

            
        }
    }
}