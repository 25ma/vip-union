<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class PoQueryBySkuReq {
	
	static $_TSPEC;
	public $pageNum = null;
	public $pageSize = null;
	public $sku = null;
	public $warehouse = null;
	public $warehouseCode = null;
	public $addTime = null;
	public $batchNo = null;
	public $isOnWay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11000 => array(
			'var' => 'pageNum'
			),
			11001 => array(
			'var' => 'pageSize'
			),
			1 => array(
			'var' => 'sku'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'addTime'
			),
			5 => array(
			'var' => 'batchNo'
			),
			6 => array(
			'var' => 'isOnWay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageNum'])){
				
				$this->pageNum = $vals['pageNum'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['isOnWay'])){
				
				$this->isOnWay = $vals['isOnWay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoQueryBySkuReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pageNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageNum); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime); 
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("isOnWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isOnWay); 
				
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
		
		if($this->pageNum !== null) {
			
			$xfer += $output->writeFieldBegin('pageNum');
			$xfer += $output->writeI32($this->pageNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOnWay !== null) {
			
			$xfer += $output->writeFieldBegin('isOnWay');
			$xfer += $output->writeI32($this->isOnWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>