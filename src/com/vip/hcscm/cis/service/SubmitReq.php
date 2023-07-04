<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SubmitReq {
	
	static $_TSPEC;
	public $serialNo = null;
	public $orderNo = null;
	public $orderType = null;
	public $operationType = null;
	public $customOrderNo = null;
	public $trackingNumber = null;
	public $orderState = null;
	public $warehouse = null;
	public $sku = null;
	public $skuQty = null;
	public $inventoryAfterCheck = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialNo'
			),
			2 => array(
			'var' => 'orderNo'
			),
			3 => array(
			'var' => 'orderType'
			),
			4 => array(
			'var' => 'operationType'
			),
			5 => array(
			'var' => 'customOrderNo'
			),
			6 => array(
			'var' => 'trackingNumber'
			),
			7 => array(
			'var' => 'orderState'
			),
			8 => array(
			'var' => 'warehouse'
			),
			9 => array(
			'var' => 'sku'
			),
			10 => array(
			'var' => 'skuQty'
			),
			11 => array(
			'var' => 'inventoryAfterCheck'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialNo'])){
				
				$this->serialNo = $vals['serialNo'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
			}
			
			
			if (isset($vals['customOrderNo'])){
				
				$this->customOrderNo = $vals['customOrderNo'];
			}
			
			
			if (isset($vals['trackingNumber'])){
				
				$this->trackingNumber = $vals['trackingNumber'];
			}
			
			
			if (isset($vals['orderState'])){
				
				$this->orderState = $vals['orderState'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['skuQty'])){
				
				$this->skuQty = $vals['skuQty'];
			}
			
			
			if (isset($vals['inventoryAfterCheck'])){
				
				$this->inventoryAfterCheck = $vals['inventoryAfterCheck'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNo);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operationType);
				
			}
			
			
			
			
			if ("customOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customOrderNo);
				
			}
			
			
			
			
			if ("trackingNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackingNumber);
				
			}
			
			
			
			
			if ("orderState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderState);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("skuQty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuQty);
				
			}
			
			
			
			
			if ("inventoryAfterCheck" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inventoryAfterCheck);
				
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
		
		$xfer += $output->writeFieldBegin('serialNo');
		$xfer += $output->writeString($this->serialNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderNo');
		$xfer += $output->writeString($this->orderNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderType');
		$xfer += $output->writeString($this->orderType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->operationType !== null) {
			
			$xfer += $output->writeFieldBegin('operationType');
			$xfer += $output->writeString($this->operationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('customOrderNo');
			$xfer += $output->writeString($this->customOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackingNumber !== null) {
			
			$xfer += $output->writeFieldBegin('trackingNumber');
			$xfer += $output->writeString($this->trackingNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderState');
		$xfer += $output->writeString($this->orderState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuQty !== null) {
			
			$xfer += $output->writeFieldBegin('skuQty');
			$xfer += $output->writeString($this->skuQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventoryAfterCheck !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryAfterCheck');
			$xfer += $output->writeString($this->inventoryAfterCheck);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>