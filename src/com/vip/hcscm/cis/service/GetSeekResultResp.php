<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GetSeekResultResp {
	
	static $_TSPEC;
	public $soNo = null;
	public $spu = null;
	public $sku = null;
	public $rdcCode = null;
	public $warehouseCode = null;
	public $warehouseName = null;
	public $allocatedQty = null;
	public $preAllocatedQty = null;
	public $poList = null;
	public $businessId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'soNo'
			),
			2 => array(
			'var' => 'spu'
			),
			3 => array(
			'var' => 'sku'
			),
			4 => array(
			'var' => 'rdcCode'
			),
			5 => array(
			'var' => 'warehouseCode'
			),
			6 => array(
			'var' => 'warehouseName'
			),
			7 => array(
			'var' => 'allocatedQty'
			),
			8 => array(
			'var' => 'preAllocatedQty'
			),
			9 => array(
			'var' => 'poList'
			),
			10 => array(
			'var' => 'businessId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['soNo'])){
				
				$this->soNo = $vals['soNo'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['allocatedQty'])){
				
				$this->allocatedQty = $vals['allocatedQty'];
			}
			
			
			if (isset($vals['preAllocatedQty'])){
				
				$this->preAllocatedQty = $vals['preAllocatedQty'];
			}
			
			
			if (isset($vals['poList'])){
				
				$this->poList = $vals['poList'];
			}
			
			
			if (isset($vals['businessId'])){
				
				$this->businessId = $vals['businessId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSeekResultResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("soNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->soNo);
				
			}
			
			
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("allocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->allocatedQty); 
				
			}
			
			
			
			
			if ("preAllocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->preAllocatedQty); 
				
			}
			
			
			
			
			if ("poList" == $schemeField){
				
				$needSkip = false;
				
				$this->poList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\GetSeekResultPoResp();
						$elem0->read($input);
						
						$this->poList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("businessId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->businessId); 
				
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
		
		if($this->soNo !== null) {
			
			$xfer += $output->writeFieldBegin('soNo');
			$xfer += $output->writeString($this->soNo);
			
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
		
		
		if($this->rdcCode !== null) {
			
			$xfer += $output->writeFieldBegin('rdcCode');
			$xfer += $output->writeString($this->rdcCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->allocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('allocatedQty');
			$xfer += $output->writeI64($this->allocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preAllocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('preAllocatedQty');
			$xfer += $output->writeI64($this->preAllocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poList !== null) {
			
			$xfer += $output->writeFieldBegin('poList');
			
			if (!is_array($this->poList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->poList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessId !== null) {
			
			$xfer += $output->writeFieldBegin('businessId');
			$xfer += $output->writeI64($this->businessId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>