<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trigger {
    
    public function __construct() {
		$CI =& get_instance();
		$CI->config->load('trigger');
		require APPPATH .'third_party/ATrigger.php';
        ATrigger::init($CI->config->item('api_key', 'trigger') ,$CI->config->item('api_secret', 'trigger'));
	}
    
    //public function doCreate($interval, $link, $tags, $firstDate, $cycles, $tries, $postData){
    //    return ATrigger::doCreate($interval, $link, $tags, $firstDate, $cycles, $tries, $postData);
    //}
    
    public function __call($function , $args){
           return  call_user_func_array(array('Atrigger' ,$function ), $args);
    }
    
    
}