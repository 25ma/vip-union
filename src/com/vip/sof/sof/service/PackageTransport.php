<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PackageTransport {
	
	static $_TSPEC;
	public $transportNo = null;
	public $goods = null;
	public $carriersCode = null;
	public $carriersName = null;
	public $tel = null;
	public $provinceName = null;
	public $cityName = null;
	public $regionName = null;
	public $townName = null;
	public $address = null;
	public $stat = null;
	public $name = null;
	public $transportNoType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'goods'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'carriersName'
			),
			5 => array(
			'var' => 'tel'
			),
			6 => array(
			'var' => 'provinceName'
			),
			7 => array(
			'var' => 'cityName'
			),
			8 => array(
			'var' => 'regionName'
			),
			9 => array(
			'var' => 'townName'
			),
			10 => array(
			'var' => 'address'
			),
			11 => array(
			'var' => 'stat'
			),
			12 => array(
			'var' => 'name'
			),
			13 => array(
			'var' => 'transportNoType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
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
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['transportNoType'])){
				
				$this->transportNoType = $vals['transportNoType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PackageTransport';
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
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\PackageGoods();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
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
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
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
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stat); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("transportNoType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportNoType); 
				
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
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
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
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeByte($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNoType !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoType');
			$xfer += $output->writeByte($this->transportNoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>