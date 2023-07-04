<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vsc\oms\osp\ship\service;

class ReceiptBatchItemInfo {
	
	static $_TSPEC;
	public $itemId = null;
	public $itemCode = null;
	public $receiveQty = null;
	public $grade = null;
	public $isReturn = null;
	public $productionBatch = null;
	public $mfgDate = null;
	public $expDate = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemId'
			),
			2 => array(
			'var' => 'itemCode'
			),
			3 => array(
			'var' => 'receiveQty'
			),
			4 => array(
			'var' => 'grade'
			),
			5 => array(
			'var' => 'isReturn'
			),
			6 => array(
			'var' => 'productionBatch'
			),
			7 => array(
			'var' => 'mfgDate'
			),
			8 => array(
			'var' => 'expDate'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemId'])){
				
				$this->itemId = $vals['itemId'];
			}
			
			
			if (isset($vals['itemCode'])){
				
				$this->itemCode = $vals['itemCode'];
			}
			
			
			if (isset($vals['receiveQty'])){
				
				$this->receiveQty = $vals['receiveQty'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['isReturn'])){
				
				$this->isReturn = $vals['isReturn'];
			}
			
			
			if (isset($vals['productionBatch'])){
				
				$this->productionBatch = $vals['productionBatch'];
			}
			
			
			if (isset($vals['mfgDate'])){
				
				$this->mfgDate = $vals['mfgDate'];
			}
			
			
			if (isset($vals['expDate'])){
				
				$this->expDate = $vals['expDate'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiptBatchItemInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemId); 
				
			}
			
			
			
			
			if ("itemCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemCode);
				
			}
			
			
			
			
			if ("receiveQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receiveQty); 
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->grade); 
				
			}
			
			
			
			
			if ("isReturn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isReturn); 
				
			}
			
			
			
			
			if ("productionBatch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productionBatch);
				
			}
			
			
			
			
			if ("mfgDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mfgDate);
				
			}
			
			
			
			
			if ("expDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expDate);
				
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
		
		$xfer += $output->writeFieldBegin('itemId');
		$xfer += $output->writeI64($this->itemId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemCode');
		$xfer += $output->writeString($this->itemCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiveQty');
		$xfer += $output->writeI32($this->receiveQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeI32($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isReturn');
		$xfer += $output->writeI32($this->isReturn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->productionBatch !== null) {
			
			$xfer += $output->writeFieldBegin('productionBatch');
			$xfer += $output->writeString($this->productionBatch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mfgDate !== null) {
			
			$xfer += $output->writeFieldBegin('mfgDate');
			$xfer += $output->writeString($this->mfgDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expDate !== null) {
			
			$xfer += $output->writeFieldBegin('expDate');
			$xfer += $output->writeString($this->expDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>