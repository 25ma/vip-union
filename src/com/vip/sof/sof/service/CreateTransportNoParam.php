<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CreateTransportNoParam {
	
	static $_TSPEC;
	public $appName = null;
	public $storeId = null;
	public $orderSn = null;
	public $packageType = null;
	public $packages = null;
	public $hebaoOrderSnList = null;
	public $packageSn = null;
	public $isParent = null;
	public $ignoreRestrict = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'packageType'
			),
			5 => array(
			'var' => 'packages'
			),
			6 => array(
			'var' => 'hebaoOrderSnList'
			),
			7 => array(
			'var' => 'packageSn'
			),
			8 => array(
			'var' => 'isParent'
			),
			9 => array(
			'var' => 'ignoreRestrict'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['packages'])){
				
				$this->packages = $vals['packages'];
			}
			
			
			if (isset($vals['hebaoOrderSnList'])){
				
				$this->hebaoOrderSnList = $vals['hebaoOrderSnList'];
			}
			
			
			if (isset($vals['packageSn'])){
				
				$this->packageSn = $vals['packageSn'];
			}
			
			
			if (isset($vals['isParent'])){
				
				$this->isParent = $vals['isParent'];
			}
			
			
			if (isset($vals['ignoreRestrict'])){
				
				$this->ignoreRestrict = $vals['ignoreRestrict'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateTransportNoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("packageType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packageType); 
				
			}
			
			
			
			
			if ("packages" == $schemeField){
				
				$needSkip = false;
				
				$this->packages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\TransportNoItem();
						$elem0->read($input);
						
						$this->packages[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("hebaoOrderSnList" == $schemeField){
				
				$needSkip = false;
				
				$this->hebaoOrderSnList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->hebaoOrderSnList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("packageSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageSn);
				
			}
			
			
			
			
			if ("isParent" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isParent); 
				
			}
			
			
			
			
			if ("ignoreRestrict" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->ignoreRestrict); 
				
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageType !== null) {
			
			$xfer += $output->writeFieldBegin('packageType');
			$xfer += $output->writeI32($this->packageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packages !== null) {
			
			$xfer += $output->writeFieldBegin('packages');
			
			if (!is_array($this->packages)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->packages as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hebaoOrderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('hebaoOrderSnList');
			
			if (!is_array($this->hebaoOrderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->hebaoOrderSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageSn !== null) {
			
			$xfer += $output->writeFieldBegin('packageSn');
			$xfer += $output->writeString($this->packageSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isParent !== null) {
			
			$xfer += $output->writeFieldBegin('isParent');
			$xfer += $output->writeByte($this->isParent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ignoreRestrict !== null) {
			
			$xfer += $output->writeFieldBegin('ignoreRestrict');
			$xfer += $output->writeByte($this->ignoreRestrict);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>