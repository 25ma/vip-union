<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SoAllocateResult {
	
	static $_TSPEC;
	public $sku = null;
	public $warehouseCode = null;
	public $allocatedQty = null;
	public $businessId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			3 => array(
			'var' => 'allocatedQty'
			),
			4 => array(
			'var' => 'businessId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['allocatedQty'])){
				
				$this->allocatedQty = $vals['allocatedQty'];
			}
			
			
			if (isset($vals['businessId'])){
				
				$this->businessId = $vals['businessId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SoAllocateResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("allocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->allocatedQty); 
				
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
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('allocatedQty');
		$xfer += $output->writeI64($this->allocatedQty);
		
		$xfer += $output->writeFieldEnd();
		
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