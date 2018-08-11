<?php 

/**
 * [getAddress description]
 * @return [type] [description]
 */
if(!function_exists("getAddress")){

	function getAddress($entrada){

		$CI =& get_instance();
		$data['class'] = strtolower(trim($CI->router->fetch_class()));
		$data['method'] = strtolower(trim($CI->router->fetch_method()));
		$caminho = "{$data['class']}/{$data['method']}";

		if($caminho == $entrada){
			return true;
		}
	}
}