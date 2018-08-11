<?php 

/**
 * Função para visualizar conteúdo
 */
if( !function_exists('dump')){
	// function dump
	function dump($entrada){
		echo "<pre>";
			print_r($entrada);
		echo "</pre>";
		exit;
	}	
}

/**
 * Função para visualizar conteúdo
 */
if( !function_exists('dmp')){
	// function dump
	function dmp($entrada){
		echo "<pre>";
			print_r($entrada);
		echo "</pre>";
	}	
}