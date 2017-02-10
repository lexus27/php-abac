<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: jungle
 * IDE: PhpStorm
 * Date: 29.09.2016
 * Time: 9:08
 */
namespace Jungle\ABAC\Matchable {
	
	use Jungle\ABAC\Context\ContextInterface;
	use Jungle\ABAC\Matchable\Resolver\Inspector;

	/**
	 * Interface ResolverInterface
	 * @package Jungle\Abac\Matchable\Matchable
	 */
	interface ResolverInterface{

		/**
		 * @param Inspector $inspector
		 * @return $this
		 */
		public function setInspector(Inspector $inspector);

		/**
		 * @return Inspector
		 */
		public function getInspector();

		/**
		 * @param \Jungle\ABAC\Context\ContextInterface $context
		 * @param Result $result
		 * @param $expression
		 * @return mixed
		 */
		public function resolve(ContextInterface $context, Result $result, $expression);

	}
}

