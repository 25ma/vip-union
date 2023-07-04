<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class GetGoodsInventoryTotalInfoResp {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $totalStockQty = null;
	public $totalAmount = null;
	public $totalAllocatedQty = null;
	public $totalInTransitQty = null;
	public $totalCanPreallocatedQty = null;
	public $totalFrozenQty = null;
	public $totalAvailableQty = null;
	public $totalSafeQty = null;
	public $totalPreallocatedQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10000 => array(
			'var' => 'code'
			),
			10001 => array(
			'var' => 'msg'
			),
			1 => array(
			'var' => 'totalStockQty'
			),
			2 => array(
			'var' => 'totalAmount'
			),
			3 => array(
			'var' => 'totalAllocatedQty'
			),
			4 => array(
			'var' => 'totalInTransitQty'
			),
			5 => array(
			'var' => 'totalCanPreallocatedQty'
			),
			6 => array(
			'var' => 'totalFrozenQty'
			),
			7 => array(
			'var' => 'totalAvailableQty'
			),
			8 => array(
			'var' => 'totalSafeQty'
			),
			9 => array(
			'var' => 'totalPreallocatedQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['totalStockQty'])){
				
				$this->totalStockQty = $vals['totalStockQty'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['totalAllocatedQty'])){
				
				$this->totalAllocatedQty = $vals['totalAllocatedQty'];
			}
			
			
			if (isset($vals['totalInTransitQty'])){
				
				$this->totalInTransitQty = $vals['totalInTransitQty'];
			}
			
			
			if (isset($vals['totalCanPreallocatedQty'])){
				
				$this->totalCanPreallocatedQty = $vals['totalCanPreallocatedQty'];
			}
			
			
			if (isset($vals['totalFrozenQty'])){
				
				$this->totalFrozenQty = $vals['totalFrozenQty'];
			}
			
			
			if (isset($vals['totalAvailableQty'])){
				
				$this->totalAvailableQty = $vals['totalAvailableQty'];
			}
			
			
			if (isset($vals['totalSafeQty'])){
				
				$this->totalSafeQty = $vals['totalSafeQty'];
			}
			
			
			if (isset($vals['totalPreallocatedQty'])){
				
				$this->totalPreallocatedQty = $vals['totalPreallocatedQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetGoodsInventoryTotalInfoResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("totalStockQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalStockQty); 
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("totalAllocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalAllocatedQty); 
				
			}
			
			
			
			
			if ("totalInTransitQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalInTransitQty); 
				
			}
			
			
			
			
			if ("totalCanPreallocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalCanPreallocatedQty); 
				
			}
			
			
			
			
			if ("totalFrozenQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalFrozenQty); 
				
			}
			
			
			
			
			if ("totalAvailableQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalAvailableQty); 
				
			}
			
			
			
			
			if ("totalSafeQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalSafeQty); 
				
			}
			
			
			
			
			if ("totalPreallocatedQty" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalPreallocatedQty); 
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalStockQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalStockQty');
			$xfer += $output->writeI64($this->totalStockQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeDouble($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAllocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalAllocatedQty');
			$xfer += $output->writeI64($this->totalAllocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalInTransitQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalInTransitQty');
			$xfer += $output->writeI64($this->totalInTransitQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCanPreallocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalCanPreallocatedQty');
			$xfer += $output->writeI64($this->totalCanPreallocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalFrozenQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalFrozenQty');
			$xfer += $output->writeI64($this->totalFrozenQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAvailableQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalAvailableQty');
			$xfer += $output->writeI64($this->totalAvailableQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalSafeQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalSafeQty');
			$xfer += $output->writeI64($this->totalSafeQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalPreallocatedQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalPreallocatedQty');
			$xfer += $output->writeI64($this->totalPreallocatedQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>