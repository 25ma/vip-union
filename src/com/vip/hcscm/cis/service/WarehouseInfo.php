<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class WarehouseInfo {
	
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
	public $createTime = null;
	public $updatedBy = null;
	public $updateTime = null;
	public $storeList = null;
	public $isGiftName = null;
	public $isOnlineSaleName = null;
	public $statusName = null;
	public $createTimeStr = null;
	public $updateTimeStr = null;
	public $warehouseAddressRspInfos = null;
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
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'updatedBy'
			),
			15 => array(
			'var' => 'updateTime'
			),
			16 => array(
			'var' => 'storeList'
			),
			17 => array(
			'var' => 'isGiftName'
			),
			18 => array(
			'var' => 'isOnlineSaleName'
			),
			19 => array(
			'var' => 'statusName'
			),
			20 => array(
			'var' => 'createTimeStr'
			),
			21 => array(
			'var' => 'updateTimeStr'
			),
			22 => array(
			'var' => 'warehouseAddressRspInfos'
			),
			23 => array(
			'var' => 'isWmsManage'
			),
			24 => array(
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
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['storeList'])){
				
				$this->storeList = $vals['storeList'];
			}
			
			
			if (isset($vals['isGiftName'])){
				
				$this->isGiftName = $vals['isGiftName'];
			}
			
			
			if (isset($vals['isOnlineSaleName'])){
				
				$this->isOnlineSaleName = $vals['isOnlineSaleName'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
			if (isset($vals['createTimeStr'])){
				
				$this->createTimeStr = $vals['createTimeStr'];
			}
			
			
			if (isset($vals['updateTimeStr'])){
				
				$this->updateTimeStr = $vals['updateTimeStr'];
			}
			
			
			if (isset($vals['warehouseAddressRspInfos'])){
				
				$this->warehouseAddressRspInfos = $vals['warehouseAddressRspInfos'];
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
		
		return 'WarehouseInfo';
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
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("storeList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\hcscm\cis\service\StoreInfo();
						$elem0->read($input);
						
						$this->storeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isGiftName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isGiftName);
				
			}
			
			
			
			
			if ("isOnlineSaleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isOnlineSaleName);
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
			}
			
			
			
			
			if ("createTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTimeStr);
				
			}
			
			
			
			
			if ("updateTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTimeStr);
				
			}
			
			
			
			
			if ("warehouseAddressRspInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseAddressRspInfos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\hcscm\cis\service\WarehouseAddressRspInfo();
						$elem1->read($input);
						
						$this->warehouseAddressRspInfos[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
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
		
		
		if($this->defectLevel !== null) {
			
			$xfer += $output->writeFieldBegin('defectLevel');
			$xfer += $output->writeString($this->defectLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeList !== null) {
			
			$xfer += $output->writeFieldBegin('storeList');
			
			if (!is_array($this->storeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGiftName !== null) {
			
			$xfer += $output->writeFieldBegin('isGiftName');
			$xfer += $output->writeString($this->isGiftName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOnlineSaleName !== null) {
			
			$xfer += $output->writeFieldBegin('isOnlineSaleName');
			$xfer += $output->writeString($this->isOnlineSaleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeStr');
			$xfer += $output->writeString($this->createTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('updateTimeStr');
			$xfer += $output->writeString($this->updateTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseAddressRspInfos !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseAddressRspInfos');
			
			if (!is_array($this->warehouseAddressRspInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseAddressRspInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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