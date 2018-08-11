<?php 

/**
 * Gerador de token
 * @param  integer $length [description]
 * @return [type] [description]
 */
if( !function_exists('generateRandomString') ){
	function generateRandomString($length = null){

		if($length == null) $length = 10;
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    } return $randomString;
	}
}