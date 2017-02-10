<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: jungle
 * IDE: PhpStorm
 * Date: 22.10.2016
 * Time: 20:17
 */
namespace Jungle\ABAC\Matchable\Resolver {

	use Jungle\ABAC\Context\ContextInterface;
	use Jungle\ABAC\Matchable\Resolver;
	use Jungle\ABAC\Matchable\Result;

	/**
	 * Class ExpressionResolver
	 * @package Jungle\Abac\Matchable\Matchable\Resolver
	 */
	class ExpressionResolver extends Resolver{


		/**
		 * @param \Jungle\ABAC\Context\ContextInterface $context
		 * @param Result $result
		 * @param $expression
		 * @return mixed
		 * @throws \Exception
		 */
		public function resolve(ContextInterface $context, Result $result, $expression){
			if(is_callable($expression)){
				return call_user_func($expression,$result,$context);
			}else{
				throw new \Exception('Expression is not valid, must be callable');
			}

		}
	}
}

