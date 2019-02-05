<?php
namespace Plenty\Modules\Report\Contracts;

use Plenty\Modules\Cloud\Storage\Models\StorageObject;
use Plenty\Modules\Report\Models\RawData;
use Plenty\Modules\Report\Models\RawDataConfig;
use Plenty\Modules\Report\Models\RawDataConfigs;
use Plenty\Modules\Report\Models\RawDataCreator;

/**
 * This interface allows you to get a list of generated raw data files
 */
interface RawDataRepositoryContract 
{

	/**
	 * Get list of raw data files
	 */
	public function getRawData(
		array $dataNames, 
		int $createdAtTimestampFrom, 
		int $createdAtTimestampTo, 
		int $itemsPerPage = 50, 
		string $afterId = ""
	):array;

	/**
	 * Get a raw data file from the storage, the storage path of the file must be specified.
	 */
	public function getRawDataFile(
		string $path
	):StorageObject;

	/**
	 * Get list of all raw data creators
	 */
	public function getRawDataCreators(
	):array;

	/**
	 * Returns list of all saved configurations
	 */
	public function getRawDataConfigs(
	):RawDataConfigs;

	/**
	 * Resets all saved raw data configurations with given data
	 */
	public function updateRawDataConfigs(
		RawDataConfigs $data
	):RawDataConfigs;

}