<?php
/**
 *
**/
namespace FishPig\WordPress_Yoast\Plugin\Term;

use FishPig\WordPress_Yoast\Plugin\AbstractPlugin;
use \FishPig\WordPress\Api\Data\Entity\ViewableInterface;

class Taxonomy extends AbstractPlugin
{
	public function aroundGetSlug($object, $callback)
	{
		if ('category' === $object->getTaxonomyType()) {
			$object->setSlug('');			
		}
		
		return $callback();
	}
}
