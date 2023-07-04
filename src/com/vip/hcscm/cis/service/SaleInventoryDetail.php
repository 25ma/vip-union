<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SaleInventoryDetail {
	
	static $_TSPEC;
	public $cargoOwner = null;
	public $rdcCode = null;
	public $rdcName = null;
	public $warehouseCode = null;
	public $spu = null;
	public $sku = null;
	public $saleAvailableInvQty = null;
	public $updateTime = null;
	public $storeRateDetails = null;
	public $allocatedQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cargoOwner'
			),
			2 => array(
			'var' => 'rdcCode'
			),
			3 => array(
			'var' => 'rdcName'
			),
			4 => array(
			'var' => 'warehouseCode'
			),
			5 => array(
			'var' => 'spu'
			),
			6 => array(
			'var' => 'sku'
			),
			7 => array(
			'var' => 'saleAvailableInvQty'
			),
			8 => array(
			'var' => 'updateTime'
			),
			9 => array(
			'var' => 'storeRateDetails'
			),
			10 => array(
			'var' => 'allocatedQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['rdcName'])){
				
				$this->rdcName = $vals['rdcName'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['saleAvailableInvQty'])){
				
				$this->saleAvailableInvQty = $vals['saleAvailableInvQty'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['storeRateDetails'])){
				
				$this->storeRateDetails = $vals['storeRateDetails'];
			}
			
			
			if (isset($vals['allocatedQty'])){
				
				$this->allocatedQty = $vals['allocatedQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SaleInventoryDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("rdcName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcName);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("saleAvailableInvQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->saleAvailableInvQty); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("storeRateDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->storeRateDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\StoreRateDetail();
						$elem0->read($input);
						
						$this->storeRateDetails[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("allocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->allocatedQty); 
				
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
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rdcCode !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCode');
			$xfer += $output->writeString($this->rdcCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rdcName !== null) {
			
			$xfer += $output->writeFieldBegin('rdcName');
			$xfer += $output->writeString($this->rdcName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu !== null) {
			
			$xfer += $output->writeFieldBegin('spu');
			$xfer += $output->writeString($this->spu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleAvailableInvQty !== null) {
			
			$xfer += $output->writeFieldBegin('saleAvailableInvQty');
			$xfer += $output->writeI64($this->saleAvailableInvQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeRateDetails !== null) {
			
			$xfer += $output->writeFieldBegin('storeRateDetails');
			
			if (!is_array($this->storeRateDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeRateDetails as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('allocatedQty');
			$xfer += $output->writeI64($this->allocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>