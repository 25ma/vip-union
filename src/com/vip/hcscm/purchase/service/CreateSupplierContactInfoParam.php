<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class CreateSupplierContactInfoParam {
	
	static $_TSPEC;
	public $id = null;
	public $supplierCode = null;
	public $dockingPeopleType = null;
	public $dockingPeopleName = null;
	public $phone = null;
	public $mailAddress = null;
	public $addressType = null;
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
			'var' => 'dockingPeopleType'
			),
			4 => array(
			'var' => 'dockingPeopleName'
			),
			5 => array(
			'var' => 'phone'
			),
			6 => array(
			'var' => 'mailAddress'
			),
			7 => array(
			'var' => 'addressType'
			),
			8 => array(
			'var' => 'dockingPeopleAddress'
			),
			9 => array(
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
			
			
			if (isset($vals['dockingPeopleType'])){
				
				$this->dockingPeopleType = $vals['dockingPeopleType'];
			}
			
			
			if (isset($vals['dockingPeopleName'])){
				
				$this->dockingPeopleName = $vals['dockingPeopleName'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['mailAddress'])){
				
				$this->mailAddress = $vals['mailAddress'];
			}
			
			
			if (isset($vals['addressType'])){
				
				$this->addressType = $vals['addressType'];
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
		
		return 'CreateSupplierContactInfoParam';
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
			
			
			
			
			if ("dockingPeopleType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dockingPeopleType); 
				
			}
			
			
			
			
			if ("dockingPeopleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dockingPeopleName);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("mailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mailAddress);
				
			}
			
			
			
			
			if ("addressType" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addressType); 
				
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
		
		
		$xfer += $output->writeFieldBegin('dockingPeopleType');
		$xfer += $output->writeI64($this->dockingPeopleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dockingPeopleName');
		$xfer += $output->writeString($this->dockingPeopleName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('phone');
		$xfer += $output->writeString($this->phone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mailAddress');
		$xfer += $output->writeString($this->mailAddress);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->addressType !== null) {
			
			$xfer += $output->writeFieldBegin('addressType');
			$xfer += $output->writeI64($this->addressType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('dockingPeopleAddress');
		$xfer += $output->writeString($this->dockingPeopleAddress);
		
		$xfer += $output->writeFieldEnd();
		
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