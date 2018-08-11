<?php 

/**
 * Registra todos os termos do banco de dados para proceder a tradução.
 * @param  [type] $output [description]
 * @return [type] [description]
 */
function _t($input){

	$output = $input;
	$CI = get_instance();
	$CI->traductions_model->exists_string($output);

	return $output;
}