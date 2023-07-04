<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportNoItem {
	
	static $_TSPEC;
	public $goods = null;
	public $carriersCode = null;
	public $name = null;
	public $tel = null;
	public $provinceName = null;
	public $cityName = null;
	public $regionName = null;
	public $townName = null;
	public $address = null;
	public $count = null;
	public $id = null;
	public $serviceFieldList = null;
	public $packageNo = null;
	public $subTransportPackages = null;
	public $packageVolume = null;
	public $packageWeight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods'
			),
			2 => array(
			'var' => 'carriersCode'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'tel'
			),
			5 => array(
			'var' => 'provinceName'
			),
			6 => array(
			'var' => 'cityName'
			),
			7 => array(
			'var' => 'regionName'
			),
			8 => array(
			'var' => 'townName'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'count'
			),
			11 => array(
			'var' => 'id'
			),
			12 => array(
			'var' => 'serviceFieldList'
			),
			13 => array(
			'var' => 'packageNo'
			),
			14 => array(
			'var' => 'subTransportPackages'
			),
			15 => array(
			'var' => 'packageVolume'
			),
			16 => array(
			'var' => 'packageWeight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
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
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['serviceFieldList'])){
				
				$this->serviceFieldList = $vals['serviceFieldList'];
			}
			
			
			if (isset($vals['packageNo'])){
				
				$this->packageNo = $vals['packageNo'];
			}
			
			
			if (isset($vals['subTransportPackages'])){
				
				$this->subTransportPackages = $vals['subTransportPackages'];
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
		
		return 'TransportNoItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sof\sof\service\PackageGoods();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
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
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("serviceFieldList" == $schemeField){
				
				$needSkip = false;
				
				$this->serviceFieldList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\sof\sof\service\TransportserviceField();
						$elem2->read($input);
						
						$this->serviceFieldList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageNo);
				
			}
			
			
			
			
			if ("subTransportPackages" == $schemeField){
				
				$needSkip = false;
				
				$this->subTransportPackages = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\sof\sof\service\SubTransportPackage();
						$elem3->read($input);
						
						$this->subTransportPackages[$_size3++] = $elem3;
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
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
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
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
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
		
		
		if($this->packageNo !== null) {
			
			$xfer += $output->writeFieldBegin('packageNo');
			$xfer += $output->writeString($this->packageNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subTransportPackages !== null) {
			
			$xfer += $output->writeFieldBegin('subTransportPackages');
			
			if (!is_array($this->subTransportPackages)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->subTransportPackages as $iter0){
				
				
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