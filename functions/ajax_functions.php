<?php

function custom_search_products(){
    
    require_once(__DIR__ . '/../classes/Search.php');

    $search = new Search($_POST);
    $data = $search->get_output();

    echo $data;

    die;
    
}

function custom_order_apply(){

    require_once(__DIR__ . '/../classes/OrderApply.php');
    
    $send = new OrderApply($_POST);
    $data = $send->get_output();

    echo $data;
 
    die;
    
}

function custom_order_message(){

    require_once(__DIR__ . '/../classes/OrderMessage.php');

    $send = new OrderMessage($_POST);
    $data = $send->get_output();

    echo $data;

    die;
    
}
