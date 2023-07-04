<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class SupplierPageVo {
	
	static $_TSPEC;
	public $id = null;
	public $code = null;
	public $shortName = null;
	public $name = null;
	public $supplierLevel = null;
	public $supplierType = null;
	public $enableStatus = null;
	public $source = null;
	public $detailAddress = null;
	public $merchandiser = null;
	public $updater = null;
	public $createTime = null;
	public $updateTime = null;
	public $purChannel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'code'
			),
			3 => array(
			'var' => 'shortName'
			),
			4 => array(
			'var' => 'name'
			),
			5 => array(
			'var' => 'supplierLevel'
			),
			6 => array(
			'var' => 'supplierType'
			),
			7 => array(
			'var' => 'enableStatus'
			),
			8 => array(
			'var' => 'source'
			),
			9 => array(
			'var' => 'detailAddress'
			),
			10 => array(
			'var' => 'merchandiser'
			),
			11 => array(
			'var' => 'updater'
			),
			12 => array(
			'var' => 'createTime'
			),
			13 => array(
			'var' => 'updateTime'
			),
			14 => array(
			'var' => 'purChannel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['shortName'])){
				
				$this->shortName = $vals['shortName'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
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
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['detailAddress'])){
				
				$this->detailAddress = $vals['detailAddress'];
			}
			
			
			if (isset($vals['merchandiser'])){
				
				$this->merchandiser = $vals['merchandiser'];
			}
			
			
			if (isset($vals['updater'])){
				
				$this->updater = $vals['updater'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['purChannel'])){
				
				$this->purChannel = $vals['purChannel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SupplierPageVo';
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
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("shortName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortName);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("supplierLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierLevel);
				
			}
			
			
			
			
			if ("supplierType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierType);
				
			}
			
			
			
			
			if ("enableStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableStatus);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("detailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailAddress);
				
			}
			
			
			
			
			if ("merchandiser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchandiser);
				
			}
			
			
			
			
			if ("updater" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updater);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortName !== null) {
			
			$xfer += $output->writeFieldBegin('shortName');
			$xfer += $output->writeString($this->shortName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierLevel !== null) {
			
			$xfer += $output->writeFieldBegin('supplierLevel');
			$xfer += $output->writeString($this->supplierLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierType !== null) {
			
			$xfer += $output->writeFieldBegin('supplierType');
			$xfer += $output->writeString($this->supplierType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableStatus !== null) {
			
			$xfer += $output->writeFieldBegin('enableStatus');
			$xfer += $output->writeString($this->enableStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailAddress !== null) {
			
			$xfer += $output->writeFieldBegin('detailAddress');
			$xfer += $output->writeString($this->detailAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandiser !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiser');
			$xfer += $output->writeString($this->merchandiser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updater !== null) {
			
			$xfer += $output->writeFieldBegin('updater');
			$xfer += $output->writeString($this->updater);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
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