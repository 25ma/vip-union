<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportItem {
	
	static $_TSPEC;
	public $transportNo = null;
	public $carriersCode = null;
	public $orderSn = null;
	public $newCarriersCode = null;
	public $name = null;
	public $tel = null;
	public $provinceName = null;
	public $cityName = null;
	public $regionName = null;
	public $townName = null;
	public $address = null;
	public $serviceFieldList = null;
	public $goods = null;
	public $packageVolume = null;
	public $packageWeight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'carriersCode'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'newCarriersCode'
			),
			5 => array(
			'var' => 'name'
			),
			6 => array(
			'var' => 'tel'
			),
			7 => array(
			'var' => 'provinceName'
			),
			8 => array(
			'var' => 'cityName'
			),
			9 => array(
			'var' => 'regionName'
			),
			10 => array(
			'var' => 'townName'
			),
			11 => array(
			'var' => 'address'
			),
			12 => array(
			'var' => 'serviceFieldList'
			),
			13 => array(
			'var' => 'goods'
			),
			14 => array(
			'var' => 'packageVolume'
			),
			15 => array(
			'var' => 'packageWeight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['newCarriersCode'])){
				
				$this->newCarriersCode = $vals['newCarriersCode'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
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
			
			
			if (isset($vals['serviceFieldList'])){
				
				$this->serviceFieldList = $vals['serviceFieldList'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['packageVolume'])){
				
				$this->packageVolume = $vals['packageVolume'];
			}
			
			
			if (isset($vals['packageWeight'])){
				
				$this->packageWeight = $vals['packageWeight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("newCarriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newCarriersCode);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
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
			
			
			
			
			if ("serviceFieldList" == $schemeField){
				
				$needSkip = false;
				
				$this->serviceFieldList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\TransportserviceField();
						$elem0->read($input);
						
						$this->serviceFieldList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\PackageGoodsVop();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageVolume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageVolume);
				
			}
			
			
			
			
			if ("packageWeight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageWeight);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCarriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('newCarriersCode');
			$xfer += $output->writeString($this->newCarriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
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
		
		
		if($this->serviceFieldList !== null) {
			
			$xfer += $output->writeFieldBegin('serviceFieldList');
			
			if (!is_array($this->serviceFieldList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->serviceFieldList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageVolume !== null) {
			
			$xfer += $output->writeFieldBegin('packageVolume');
			$xfer += $output->writeString($this->packageVolume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageWeight !== null) {
			
			$xfer += $output->writeFieldBegin('packageWeight');
			$xfer += $output->writeString($this->packageWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>