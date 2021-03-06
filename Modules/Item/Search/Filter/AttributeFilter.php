<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Filters the index by specific attributes or attribute values
 */
abstract class AttributeFilter implements TypeInterface

{

	abstract public function hasAttribute(
		int $attributeId
	);

	abstract public function hasAnyAttribute(
		array $attributeIds
	);

	abstract public function hasAllAttributes(
		array $attributeIds
	);

	abstract public function hasAttributeValue(
		int $attributeValueId
	);

	abstract public function hasAnyAttributeValue(
		array $attributeValueIds
	);

	abstract public function hasAllAttributeValues(
		array $attributeValueIds
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}