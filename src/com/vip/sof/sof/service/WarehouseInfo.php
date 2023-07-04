<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class WarehouseInfo {
	
	static $_TSPEC;
	public $warehouseCode = null;
	public $warehouseName = null;
	public $tel = null;
	public $provinceName = null;
	public $cityName = null;
	public $regionName = null;
	public $townName = null;
	public $address = null;
	public $name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseCode'
			),
			2 => array(
			'var' => 'warehouseName'
			),
			3 => array(
			'var' => 'tel'
			),
			4 => array(
			'var' => 'provinceName'
			),
			5 => array(
			'var' => 'cityName'
			),
			6 => array(
			'var' => 'regionName'
			),
			7 => array(
			'var' => 'townName'
			),
			8 => array(
			'var' => 'address'
			),
			9 => array(
			'var' => 'name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['regionName'])){
				
				$this->regionName = $vals['regionName'];
			}
			
			
			if (isset($vals['townName'])){
				
				$this->townName = $vals['townName'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("regionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->regionName);
				
			}
			
			
			
			
			if ("townName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->townName);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regionName !== null) {
			
			$xfer += $output->writeFieldBegin('regionName');
			$xfer += $output->writeString($this->regionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->townName !== null) {
			
			$xfer += $output->writeFieldBegin('townName');
			$xfer += $output->writeString($this->townName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>