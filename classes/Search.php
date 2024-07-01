<?php

require_once(__DIR__ . '/BaseAjax.php');

class Search extends BaseAjax
{

    protected $products;

	public function __construct($post)
    {
        parent::__construct($post);

    }

    protected function get_products() {
        $posts_args = [
            'limit' => 5,
            's' => $this->post['phrase'],

        ];

        $this->products = get_posts($posts_args);
    }

    protected function set_products_output() {
        if(!empty($this->products)){
            foreach($this->products as $product){
                $this->output .= '<div class="autocomplete-suggestion">
                                <a href="' . get_the_permalink($product->ID) . '">
                                    <div class="smart-search-post post-6678">
                                        <div class="smart-search-post-icon">
                                            <img src="' . get_the_post_thumbnail_url( $product->ID, 'thumbnail' ) . '" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy">
                                        </div>
                                        <div class="smart-search-post-holder">
                                            <div class="smart-search-post-title"><strong>' . $product->post_title . '</strong></div>
                                            <div class="smart-search-post-price-holder">
                                                
                                            </div>
                                            <div class="smart-search-clear"></div>
                                        </div><!--.smart-search-post-holder-->
                                        <div class="smart-search-clear"></div>
                                        
                                    </div>
                                </a>
                            </div>';
            }

        }
    }


	protected function handle() {
        if($this->validate()){

            $this->output = '';

            $this->set_save_post_data();

            $this->get_products();

            $this->set_products_output();

        }
    }

    public function get_output()
    {
        $this->handle();

        return $this->output;
    }
}