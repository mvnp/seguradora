<?php

/**
 * Do banco para PT_BR ...
 * @param  [type] $recebedata [description]
 * @return [type] [description]
 */
function date_DB_Ptbr($recebedata = null){
	return $recebedata = date('d/m/Y H:i:s', strtotime($recebedata));
}