<?php
/**
 * @created Alexey Kutuzov <lexus27.khv@gmail.com>
 * @Project: php-abac
 */

namespace Jungle\ABAC;


class Generator{
	
	public function a(){
		$ctx=new \stdClass();
		// target(any_of, all_of; n-conditions)
		// rule(1-condition)
		
		// if target->conformed===true
		
		/**
		/*  FULL condition code generate
		/*      left operand : code for fetch val from ctx by path OR value render
		/*      operator identifier code render, OR @operator_special_function code generate
		 *      right operand : code for fetch val from ctx by path OR value render
		 */
		
		// one condition
		if($ctx->{'path_to_parameter'} !== 'example'){
			
		}
		if(call_user_func('operator_123',$ctx->{'path_to_parameter'}, 'example')){
			
		}
		// target composition ANY_OF ALL_OF
		if(
			/* ANY_OF */($ctx->{'path_to_parameter'} !== 'example' || $ctx->{'path_to_parameter'} !== 'example') &&
			            /* ALL_OF */($ctx->{'path_to_parameter'} !== 'example' && $ctx->{'path_to_parameter'} !== 'example')
		){
			
		}
		
		// combiner (пока самое сложное)
		
		/*
		 * Суть чтобы выстроить дочерние правила и политики соответственно комбинеру
		 * Одно дело, правило если не совпадает, все дочерние идущие дальше - игнорируются (можно перескачить при помощи goto)
		 * Другое дело, первое правило совпало - означает успех - нужно вызывать обработчики каждого правила
		 */
		
		
		// operator special function
		function operator_123($a,$b){
			return true;
		}
	}
	
}


