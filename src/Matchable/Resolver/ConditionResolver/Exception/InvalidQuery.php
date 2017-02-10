<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 16.02.2016
 * Time: 19:05
 */
namespace Jungle\ABAC\Matchable\Resolver\ConditionResolver\Exception {

	/**
	 * Class InvalidQuery
	 * @package Jungle\Abac\Matchable\Matchable\Resolver\ConditionResolver\ABACException
	 */
	class InvalidQuery extends Query{
		protected $type = 'invalid_definition';

	}
}

