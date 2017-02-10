<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 16.02.2016
 * Time: 18:59
 */
namespace Jungle\ABAC\Matchable\Resolver\ConditionResolver\Exception {

	/**
	 * Class PathNotFound
	 * @package Jungle\Abac\Matchable\Matchable\Resolver\ConditionResolver\ABACException
	 */
	class PathNotFound extends Query{
		protected $type = 'path_not_found';

	}
}

