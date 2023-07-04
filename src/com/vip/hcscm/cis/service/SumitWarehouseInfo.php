<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SumitWarehouseInfo {
	
	static $_TSPEC;
	public $id = null;
	public $cargoOwner = null;
	public $warehouseCode = null;
	public $warehouseName = null;
	public $rdcCode = null;
	public $rdcName = null;
	public $defectLevel = null;
	public $isGift = null;
	public $isOnlineSale = null;
	public $status = null;
	public $remark = null;
	public $createdBy = null;
	public $updatedBy = null;
	public $isWmsManage = null;
	public $wmsSystem = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'cargoOwner'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'warehouseName'
			),
			5 => array(
			'var' => 'rdcCode'
			),
			6 => array(
			'var' => 'rdcName'
			),
			7 => array(
			'var' => 'defectLevel'
			),
			8 => array(
			'var' => 'isGift'
			),
			9 => array(
			'var' => 'isOnlineSale'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'remark'
			),
			12 => array(
			'var' => 'createdBy'
			),
			13 => array(
			'var' => 'updatedBy'
			),
			14 => array(
			'var' => 'isWmsManage'
			),
			15 => array(
			'var' => 'wmsSystem'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['rdcCode'])){
				
				$this->rdcCode = $vals['rdcCode'];
			}
			
			
			if (isset($vals['rdcName'])){
				
				$this->rdcName = $vals['rdcName'];
			}
			
			
			if (isset($vals['defectLevel'])){
				
				$this->defectLevel = $vals['defectLevel'];
			}
			
			
			if (isset($vals['isGift'])){
				
				$this->isGift = $vals['isGift'];
			}
			
			
			if (isset($vals['isOnlineSale'])){
				
				$this->isOnlineSale = $vals['isOnlineSale'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['isWmsManage'])){
				
				$this->isWmsManage = $vals['isWmsManage'];
			}
			
			
			if (isset($vals['wmsSystem'])){
				
				$this->wmsSystem = $vals['wmsSystem'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SumitWarehouseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("rdcCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcCode);
				
			}
			
			
			
			
			if ("rdcName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rdcName);
				
			}
			
			
			
			
			if ("defectLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defectLevel);
				
			}
			
			
			
			
			if ("isGift" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isGift); 
				
			}
			
			
			
			
			if ("isOnlineSale" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isOnlineSale); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("isWmsManage" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->isWmsManage); 
				
			}
			
			
			
			
			if ("wmsSystem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsSystem);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouseName');
		$xfer += $output->writeString($this->warehouseName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rdcCode');
		$xfer += $output->writeString($this->rdcCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rdcName');
		$xfer += $output->writeString($this->rdcName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('defectLevel');
		$xfer += $output->writeString($this->defectLevel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isGift !== null) {
			
			$xfer += $output->writeFieldBegin('isGift');
			$xfer += $output->writeI32($this->isGift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOnlineSale !== null) {
			
			$xfer += $output->writeFieldBegin('isOnlineSale');
			$xfer += $output->writeI32($this->isOnlineSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isWmsManage !== null) {
			
			$xfer += $output->writeFieldBegin('isWmsManage');
			$xfer += $output->writeI64($this->isWmsManage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsSystem !== null) {
			
			$xfer += $output->writeFieldBegin('wmsSystem');
			$xfer += $output->writeString($this->wmsSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>