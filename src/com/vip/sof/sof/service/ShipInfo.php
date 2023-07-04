<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ShipInfo {
	
	static $_TSPEC;
	public $appName = null;
	public $storeId = null;
	public $orderSn = null;
	public $carriersCode = null;
	public $carrier = null;
	public $packageType = null;
	public $freightForwarderCode = null;
	public $deliveryTime = null;
	public $createBy = null;
	public $packages = null;
	public $dataSource = null;
	public $shippingMethod = null;
	public $shipType = null;
	
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
			'var' => 'carriersCode'
			),
			5 => array(
			'var' => 'carrier'
			),
			6 => array(
			'var' => 'packageType'
			),
			7 => array(
			'var' => 'freightForwarderCode'
			),
			8 => array(
			'var' => 'deliveryTime'
			),
			9 => array(
			'var' => 'createBy'
			),
			10 => array(
			'var' => 'packages'
			),
			11 => array(
			'var' => 'dataSource'
			),
			12 => array(
			'var' => 'shippingMethod'
			),
			13 => array(
			'var' => 'shipType'
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
			
			
			if (isset($vals['carriersCode'])){
				
				$this->carriersCode = $vals['carriersCode'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['freightForwarderCode'])){
				
				$this->freightForwarderCode = $vals['freightForwarderCode'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['packages'])){
				
				$this->packages = $vals['packages'];
			}
			
			
			if (isset($vals['dataSource'])){
				
				$this->dataSource = $vals['dataSource'];
			}
			
			
			if (isset($vals['shippingMethod'])){
				
				$this->shippingMethod = $vals['shippingMethod'];
			}
			
			
			if (isset($vals['shipType'])){
				
				$this->shipType = $vals['shipType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipInfo';
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
			
			
			
			
			if ("freightForwarderCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->freightForwarderCode);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryTime); 
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("packages" == $schemeField){
				
				$needSkip = false;
				
				$this->packages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sof\sof\service\Package();
						$elem0->read($input);
						
						$this->packages[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("dataSource" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataSource); 
				
			}
			
			
			
			
			if ("shippingMethod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shippingMethod); 
				
			}
			
			
			
			
			if ("shipType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipType);
				
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
		
		
		if($this->freightForwarderCode !== null) {
			
			$xfer += $output->writeFieldBegin('freightForwarderCode');
			$xfer += $output->writeString($this->freightForwarderCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeI64($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
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
		
		
		if($this->dataSource !== null) {
			
			$xfer += $output->writeFieldBegin('dataSource');
			$xfer += $output->writeI32($this->dataSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shippingMethod !== null) {
			
			$xfer += $output->writeFieldBegin('shippingMethod');
			$xfer += $output->writeI32($this->shippingMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipType !== null) {
			
			$xfer += $output->writeFieldBegin('shipType');
			$xfer += $output->writeString($this->shipType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>