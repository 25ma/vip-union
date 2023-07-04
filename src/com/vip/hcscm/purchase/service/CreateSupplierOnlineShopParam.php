<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class CreateSupplierOnlineShopParam {
	
	static $_TSPEC;
	public $id = null;
	public $supplierCode = null;
	public $useStatus = null;
	public $defaultStatus = null;
	public $onlineSupplierType = null;
	public $storeId = null;
	public $storeName = null;
	public $wangwangId = null;
	public $storeLink = null;
	public $dockingPeopleAddress = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'supplierCode'
			),
			3 => array(
			'var' => 'useStatus'
			),
			4 => array(
			'var' => 'defaultStatus'
			),
			5 => array(
			'var' => 'onlineSupplierType'
			),
			6 => array(
			'var' => 'storeId'
			),
			7 => array(
			'var' => 'storeName'
			),
			8 => array(
			'var' => 'wangwangId'
			),
			9 => array(
			'var' => 'storeLink'
			),
			10 => array(
			'var' => 'dockingPeopleAddress'
			),
			11 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['supplierCode'])){
				
				$this->supplierCode = $vals['supplierCode'];
			}
			
			
			if (isset($vals['useStatus'])){
				
				$this->useStatus = $vals['useStatus'];
			}
			
			
			if (isset($vals['defaultStatus'])){
				
				$this->defaultStatus = $vals['defaultStatus'];
			}
			
			
			if (isset($vals['onlineSupplierType'])){
				
				$this->onlineSupplierType = $vals['onlineSupplierType'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['wangwangId'])){
				
				$this->wangwangId = $vals['wangwangId'];
			}
			
			
			if (isset($vals['storeLink'])){
				
				$this->storeLink = $vals['storeLink'];
			}
			
			
			if (isset($vals['dockingPeopleAddress'])){
				
				$this->dockingPeopleAddress = $vals['dockingPeopleAddress'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateSupplierOnlineShopParam';
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
			
			
			
			
			if ("supplierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierCode);
				
			}
			
			
			
			
			if ("useStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useStatus); 
				
			}
			
			
			
			
			if ("defaultStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->defaultStatus); 
				
			}
			
			
			
			
			if ("onlineSupplierType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineSupplierType); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("wangwangId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wangwangId);
				
			}
			
			
			
			
			if ("storeLink" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeLink);
				
			}
			
			
			
			
			if ("dockingPeopleAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dockingPeopleAddress);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		
		if($this->supplierCode !== null) {
			
			$xfer += $output->writeFieldBegin('supplierCode');
			$xfer += $output->writeString($this->supplierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useStatus !== null) {
			
			$xfer += $output->writeFieldBegin('useStatus');
			$xfer += $output->writeI64($this->useStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultStatus !== null) {
			
			$xfer += $output->writeFieldBegin('defaultStatus');
			$xfer += $output->writeI64($this->defaultStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineSupplierType !== null) {
			
			$xfer += $output->writeFieldBegin('onlineSupplierType');
			$xfer += $output->writeI64($this->onlineSupplierType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wangwangId !== null) {
			
			$xfer += $output->writeFieldBegin('wangwangId');
			$xfer += $output->writeString($this->wangwangId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('storeLink');
		$xfer += $output->writeString($this->storeLink);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->dockingPeopleAddress !== null) {
			
			$xfer += $output->writeFieldBegin('dockingPeopleAddress');
			$xfer += $output->writeString($this->dockingPeopleAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>