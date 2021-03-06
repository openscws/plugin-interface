<?php
namespace Plenty\Modules\Item\ItemCrossSelling\Models;


/**
 * The item dynamic cross-selling model including the item
 */
abstract class DynamicItemCrossSelling 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$itemId;
	public		$crossItemId;
	public		$count;
	public		$lastUpdate;
	public		$item;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}