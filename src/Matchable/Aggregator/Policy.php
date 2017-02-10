<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 14.02.2016
 * Time: 18:55
 */
namespace Jungle\ABAC\Matchable\Aggregator {

	use Jungle\ABAC\Matchable\Aggregator;
	use Jungle\ABAC\Matchable\Matchable;
	use Jungle\ABAC\Matchable\Rule;

	/**
	 * Class Policy
	 * @package Jungle\Abac
	 */
	class Policy extends Aggregator{

		/**
		 * @param \Jungle\ABAC\Matchable\Matchable $matchable
		 * @param bool $applied
		 * @return $this
		 */
		public function addChild(Matchable $matchable, $applied = false){
			$this->children[] = $matchable;
			if(!$applied && !$matchable instanceof Rule){
				$matchable->setParent($this, true);
			}
			return $this;
		}

		/**
		 * @param \Jungle\ABAC\Matchable\Matchable $matchable
		 * @param bool|false $applied
		 * @return $this
		 */
		public function removeChild(Matchable $matchable, $applied = false){
			$i = array_search($matchable, $this->children, true);
			if($i !== false){
				array_splice($this->children, $i, 1);
				if(!$applied && !$matchable instanceof Rule){
					$matchable->setParent(null,true, true);
				}
			}
			return $this;

		}



	}
}

