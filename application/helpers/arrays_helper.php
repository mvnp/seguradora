<?php 

/**
 * Transforme o array em array para comparação ...
 * @param  [type] $data [description]
 * @return [type] [description]
 */
if(!function_exists('getDataInForeach')){
	
	function getDataInForeach($data, $column){
		$Array = [];
		if(is_array($data)){
			foreach ($data as $items => $item) {
				$Array[] = $item[$column];
			}
		} return $Array;
	}	
}