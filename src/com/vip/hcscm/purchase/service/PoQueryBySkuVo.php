<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class PoQueryBySkuVo {
	
	static $_TSPEC;
	public $batchNo = null;
	public $poCode = null;
	public $addTime = null;
	public $poStatus = null;
	public $poStatusStr = null;
	public $externalStatus = null;
	public $externalStatusStr = null;
	public $sentStatus = null;
	public $sentStatusStr = null;
	public $warehouseStatus = null;
	public $warehouseStatusStr = null;
	public $receiveStatus = null;
	public $receiveStatusStr = null;
	public $supplierCode = null;
	public $supplierName = null;
	public $wmsId = null;
	public $warehouse = null;
	public $sku = null;
	public $purchaseNum = null;
	public $acceptGoodsNum = null;
	public $warehouseNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchNo'
			),
			2 => array(
			'var' => 'poCode'
			),
			3 => array(
			'var' => 'addTime'
			),
			4 => array(
			'var' => 'poStatus'
			),
			5 => array(
			'var' => 'poStatusStr'
			),
			6 => array(
			'var' => 'externalStatus'
			),
			7 => array(
			'var' => 'externalStatusStr'
			),
			8 => array(
			'var' => 'sentStatus'
			),
			9 => array(
			'var' => 'sentStatusStr'
			),
			10 => array(
			'var' => 'warehouseStatus'
			),
			11 => array(
			'var' => 'warehouseStatusStr'
			),
			12 => array(
			'var' => 'receiveStatus'
			),
			13 => array(
			'var' => 'receiveStatusStr'
			),
			20 => array(
			'var' => 'supplierCode'
			),
			21 => array(
			'var' => 'supplierName'
			),
			22 => array(
			'var' => 'wmsId'
			),
			23 => array(
			'var' => 'warehouse'
			),
			24 => array(
			'var' => 'sku'
			),
			25 => array(
			'var' => 'purchaseNum'
			),
			26 => array(
			'var' => 'acceptGoodsNum'
			),
			27 => array(
			'var' => 'warehouseNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['poCode'])){
				
				$this->poCode = $vals['poCode'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['poStatus'])){
				
				$this->poStatus = $vals['poStatus'];
			}
			
			
			if (isset($vals['poStatusStr'])){
				
				$this->poStatusStr = $vals['poStatusStr'];
			}
			
			
			if (isset($vals['externalStatus'])){
				
				$this->externalStatus = $vals['externalStatus'];
			}
			
			
			if (isset($vals['externalStatusStr'])){
				
				$this->externalStatusStr = $vals['externalStatusStr'];
			}
			
			
			if (isset($vals['sentStatus'])){
				
				$this->sentStatus = $vals['sentStatus'];
			}
			
			
			if (isset($vals['sentStatusStr'])){
				
				$this->sentStatusStr = $vals['sentStatusStr'];
			}
			
			
			if (isset($vals['warehouseStatus'])){
				
				$this->warehouseStatus = $vals['warehouseStatus'];
			}
			
			
			if (isset($vals['warehouseStatusStr'])){
				
				$this->warehouseStatusStr = $vals['warehouseStatusStr'];
			}
			
			
			if (isset($vals['receiveStatus'])){
				
				$this->receiveStatus = $vals['receiveStatus'];
			}
			
			
			if (isset($vals['receiveStatusStr'])){
				
				$this->receiveStatusStr = $vals['receiveStatusStr'];
			}
			
			
			if (isset($vals['supplierCode'])){
				
				$this->supplierCode = $vals['supplierCode'];
			}
			
			
			if (isset($vals['supplierName'])){
				
				$this->supplierName = $vals['supplierName'];
			}
			
			
			if (isset($vals['wmsId'])){
				
				$this->wmsId = $vals['wmsId'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['purchaseNum'])){
				
				$this->purchaseNum = $vals['purchaseNum'];
			}
			
			
			if (isset($vals['acceptGoodsNum'])){
				
				$this->acceptGoodsNum = $vals['acceptGoodsNum'];
			}
			
			
			if (isset($vals['warehouseNum'])){
				
				$this->warehouseNum = $vals['warehouseNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoQueryBySkuVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("poCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poCode);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("poStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->poStatus); 
				
			}
			
			
			
			
			if ("poStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poStatusStr);
				
			}
			
			
			
			
			if ("externalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externalStatus);
				
			}
			
			
			
			
			if ("externalStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externalStatusStr);
				
			}
			
			
			
			
			if ("sentStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sentStatus); 
				
			}
			
			
			
			
			if ("sentStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sentStatusStr);
				
			}
			
			
			
			
			if ("warehouseStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warehouseStatus); 
				
			}
			
			
			
			
			if ("warehouseStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseStatusStr);
				
			}
			
			
			
			
			if ("receiveStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->receiveStatus); 
				
			}
			
			
			
			
			if ("receiveStatusStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiveStatusStr);
				
			}
			
			
			
			
			if ("supplierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierCode);
				
			}
			
			
			
			
			if ("supplierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierName);
				
			}
			
			
			
			
			if ("wmsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsId);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("purchaseNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseNum); 
				
			}
			
			
			
			
			if ("acceptGoodsNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->acceptGoodsNum); 
				
			}
			
			
			
			
			if ("warehouseNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->warehouseNum); 
				
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
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCode !== null) {
			
			$xfer += $output->writeFieldBegin('poCode');
			$xfer += $output->writeString($this->poCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poStatus !== null) {
			
			$xfer += $output->writeFieldBegin('poStatus');
			$xfer += $output->writeI64($this->poStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('poStatusStr');
			$xfer += $output->writeString($this->poStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('externalStatus');
			$xfer += $output->writeString($this->externalStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externalStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('externalStatusStr');
			$xfer += $output->writeString($this->externalStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sentStatus !== null) {
			
			$xfer += $output->writeFieldBegin('sentStatus');
			$xfer += $output->writeI64($this->sentStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sentStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('sentStatusStr');
			$xfer += $output->writeString($this->sentStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseStatus !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseStatus');
			$xfer += $output->writeI64($this->warehouseStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseStatusStr');
			$xfer += $output->writeString($this->warehouseStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveStatus !== null) {
			
			$xfer += $output->writeFieldBegin('receiveStatus');
			$xfer += $output->writeI64($this->receiveStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveStatusStr !== null) {
			
			$xfer += $output->writeFieldBegin('receiveStatusStr');
			$xfer += $output->writeString($this->receiveStatusStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierCode !== null) {
			
			$xfer += $output->writeFieldBegin('supplierCode');
			$xfer += $output->writeString($this->supplierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierName !== null) {
			
			$xfer += $output->writeFieldBegin('supplierName');
			$xfer += $output->writeString($this->supplierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsId !== null) {
			
			$xfer += $output->writeFieldBegin('wmsId');
			$xfer += $output->writeString($this->wmsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseNum !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNum');
			$xfer += $output->writeI32($this->purchaseNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptGoodsNum !== null) {
			
			$xfer += $output->writeFieldBegin('acceptGoodsNum');
			$xfer += $output->writeI32($this->acceptGoodsNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseNum !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseNum');
			$xfer += $output->writeI32($this->warehouseNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>