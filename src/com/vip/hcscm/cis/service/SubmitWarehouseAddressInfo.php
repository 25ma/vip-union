<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class SubmitWarehouseAddressInfo {
	
	static $_TSPEC;
	public $id = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $address = null;
	public $fullName = null;
	public $post = null;
	public $phone = null;
	public $mobilePhone = null;
	public $defaultFlag = null;
	public $createdBy = null;
	public $updatedBy = null;
	public $operateType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'country'
			),
			3 => array(
			'var' => 'province'
			),
			4 => array(
			'var' => 'city'
			),
			5 => array(
			'var' => 'district'
			),
			6 => array(
			'var' => 'address'
			),
			7 => array(
			'var' => 'fullName'
			),
			8 => array(
			'var' => 'post'
			),
			9 => array(
			'var' => 'phone'
			),
			10 => array(
			'var' => 'mobilePhone'
			),
			11 => array(
			'var' => 'defaultFlag'
			),
			12 => array(
			'var' => 'createdBy'
			),
			13 => array(
			'var' => 'updatedBy'
			),
			14 => array(
			'var' => 'operateType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['fullName'])){
				
				$this->fullName = $vals['fullName'];
			}
			
			
			if (isset($vals['post'])){
				
				$this->post = $vals['post'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['mobilePhone'])){
				
				$this->mobilePhone = $vals['mobilePhone'];
			}
			
			
			if (isset($vals['defaultFlag'])){
				
				$this->defaultFlag = $vals['defaultFlag'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
			if (isset($vals['operateType'])){
				
				$this->operateType = $vals['operateType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitWarehouseAddressInfo';
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
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("fullName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullName);
				
			}
			
			
			
			
			if ("post" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("mobilePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobilePhone);
				
			}
			
			
			
			
			if ("defaultFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->defaultFlag); 
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
			}
			
			
			
			
			if ("operateType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateType); 
				
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
		
		
		$xfer += $output->writeFieldBegin('country');
		$xfer += $output->writeString($this->country);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('province');
		$xfer += $output->writeString($this->province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('district');
		$xfer += $output->writeString($this->district);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fullName');
		$xfer += $output->writeString($this->fullName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('post');
		$xfer += $output->writeString($this->post);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('mobilePhone');
		$xfer += $output->writeString($this->mobilePhone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('defaultFlag');
		$xfer += $output->writeI64($this->defaultFlag);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->operateType !== null) {
			
			$xfer += $output->writeFieldBegin('operateType');
			$xfer += $output->writeI32($this->operateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>