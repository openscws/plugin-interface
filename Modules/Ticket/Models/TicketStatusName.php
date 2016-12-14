<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket status name model.
 */
abstract class TicketStatusName 
{
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}