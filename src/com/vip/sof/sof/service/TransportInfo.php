<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class TransportInfo {
	
	static $_TSPEC;
	public $appName = null;
	public $orderSn = null;
	public $carriersCode = null;
	public $carrier = null;
	public $packageType = null;
	public $storeId = null;
	public $createBy = null;
	public $transportPackages = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'carriersCode'
			),
			4 => array(
			'var' => 'carrier'
			),
			5 => array(
			'var' => 'packageType'
			),
			6 => array(
			'var' => 'storeId'
			),
			7 => array(
			'var' => 'createBy'
			),
			8 => array(
			'var' => 'transportPackages'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['transportPackages'])){
				
				$this->transportPackages = $vals['transportPackages'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportInfo';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("carriersCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersCode);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("packageType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packageType); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("transportPackages" == $schemeField){
				
				$needSkip = false;
				
				$this->transportPackages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\TransportPackage();
						$elem0->read($input);
						
						$this->transportPackages[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersCode !== null) {
			
			$xfer += $output->writeFieldBegin('carriersCode');
			$xfer += $output->writeString($this->carriersCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageType !== null) {
			
			$xfer += $output->writeFieldBegin('packageType');
			$xfer += $output->writeI32($this->packageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportPackages !== null) {
			
			$xfer += $output->writeFieldBegin('transportPackages');
			
			if (!is_array($this->transportPackages)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportPackages as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>