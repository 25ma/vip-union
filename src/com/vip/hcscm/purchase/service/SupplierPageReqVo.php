<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierPageReqVo {
	
	static $_TSPEC;
	public $caller = null;
	public $operator = null;
	public $cargoOwner = null;
	public $pageNum = null;
	public $pageSize = null;
	public $codeName = null;
	public $supplierLevel = null;
	public $supplierType = null;
	public $enableStatus = null;
	public $merchandiser = null;
	public $createStartTime = null;
	public $createEndTime = null;
	public $purChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10001 => array(
			'var' => 'caller'
			),
			10002 => array(
			'var' => 'operator'
			),
			10003 => array(
			'var' => 'cargoOwner'
			),
			1 => array(
			'var' => 'pageNum'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'codeName'
			),
			4 => array(
			'var' => 'supplierLevel'
			),
			5 => array(
			'var' => 'supplierType'
			),
			6 => array(
			'var' => 'enableStatus'
			),
			7 => array(
			'var' => 'merchandiser'
			),
			8 => array(
			'var' => 'createStartTime'
			),
			9 => array(
			'var' => 'createEndTime'
			),
			10 => array(
			'var' => 'purChannel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['caller'])){
				
				$this->caller = $vals['caller'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['cargoOwner'])){
				
				$this->cargoOwner = $vals['cargoOwner'];
			}
			
			
			if (isset($vals['pageNum'])){
				
				$this->pageNum = $vals['pageNum'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['codeName'])){
				
				$this->codeName = $vals['codeName'];
			}
			
			
			if (isset($vals['supplierLevel'])){
				
				$this->supplierLevel = $vals['supplierLevel'];
			}
			
			
			if (isset($vals['supplierType'])){
				
				$this->supplierType = $vals['supplierType'];
			}
			
			
			if (isset($vals['enableStatus'])){
				
				$this->enableStatus = $vals['enableStatus'];
			}
			
			
			if (isset($vals['merchandiser'])){
				
				$this->merchandiser = $vals['merchandiser'];
			}
			
			
			if (isset($vals['createStartTime'])){
				
				$this->createStartTime = $vals['createStartTime'];
			}
			
			
			if (isset($vals['createEndTime'])){
				
				$this->createEndTime = $vals['createEndTime'];
			}
			
			
			if (isset($vals['purChannel'])){
				
				$this->purChannel = $vals['purChannel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SupplierPageReqVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("caller" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->caller);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("cargoOwner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cargoOwner);
				
			}
			
			
			
			
			if ("pageNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageNum); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("codeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->codeName);
				
			}
			
			
			
			
			if ("supplierLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->supplierLevel); 
				
			}
			
			
			
			
			if ("supplierType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->supplierType); 
				
			}
			
			
			
			
			if ("enableStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->enableStatus); 
				
			}
			
			
			
			
			if ("merchandiser" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merchandiser); 
				
			}
			
			
			
			
			if ("createStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createStartTime);
				
			}
			
			
			
			
			if ("createEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createEndTime);
				
			}
			
			
			
			
			if ("purChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purChannel);
				
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
		
		$xfer += $output->writeFieldBegin('caller');
		$xfer += $output->writeString($this->caller);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cargoOwner !== null) {
			
			$xfer += $output->writeFieldBegin('cargoOwner');
			$xfer += $output->writeString($this->cargoOwner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageNum');
		$xfer += $output->writeI32($this->pageNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->codeName !== null) {
			
			$xfer += $output->writeFieldBegin('codeName');
			$xfer += $output->writeString($this->codeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierLevel !== null) {
			
			$xfer += $output->writeFieldBegin('supplierLevel');
			$xfer += $output->writeI64($this->supplierLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierType !== null) {
			
			$xfer += $output->writeFieldBegin('supplierType');
			$xfer += $output->writeI64($this->supplierType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableStatus !== null) {
			
			$xfer += $output->writeFieldBegin('enableStatus');
			$xfer += $output->writeI64($this->enableStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandiser !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiser');
			$xfer += $output->writeI64($this->merchandiser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('createStartTime');
			$xfer += $output->writeString($this->createStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('createEndTime');
			$xfer += $output->writeString($this->createEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purChannel !== null) {
			
			$xfer += $output->writeFieldBegin('purChannel');
			$xfer += $output->writeString($this->purChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>