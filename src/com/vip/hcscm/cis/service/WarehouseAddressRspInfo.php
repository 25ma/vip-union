<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\cis\service;

class WarehouseAddressRspInfo {
	
	static $_TSPEC;
	public $id = null;
	public $warehouseCode = null;
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
	public $countryResult = null;
	public $provinceResult = null;
	public $cityResult = null;
	public $districtResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			3 => array(
			'var' => 'country'
			),
			4 => array(
			'var' => 'province'
			),
			5 => array(
			'var' => 'city'
			),
			6 => array(
			'var' => 'district'
			),
			7 => array(
			'var' => 'address'
			),
			8 => array(
			'var' => 'fullName'
			),
			9 => array(
			'var' => 'post'
			),
			10 => array(
			'var' => 'phone'
			),
			11 => array(
			'var' => 'mobilePhone'
			),
			12 => array(
			'var' => 'defaultFlag'
			),
			13 => array(
			'var' => 'countryResult'
			),
			14 => array(
			'var' => 'provinceResult'
			),
			15 => array(
			'var' => 'cityResult'
			),
			16 => array(
			'var' => 'districtResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
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
			
			
			if (isset($vals['countryResult'])){
				
				$this->countryResult = $vals['countryResult'];
			}
			
			
			if (isset($vals['provinceResult'])){
				
				$this->provinceResult = $vals['provinceResult'];
			}
			
			
			if (isset($vals['cityResult'])){
				
				$this->cityResult = $vals['cityResult'];
			}
			
			
			if (isset($vals['districtResult'])){
				
				$this->districtResult = $vals['districtResult'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseAddressRspInfo';
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
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
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
			
			
			
			
			if ("countryResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->countryResult);
				
			}
			
			
			
			
			if ("provinceResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceResult);
				
			}
			
			
			
			
			if ("cityResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityResult);
				
			}
			
			
			
			
			if ("districtResult" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->districtResult);
				
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
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullName !== null) {
			
			$xfer += $output->writeFieldBegin('fullName');
			$xfer += $output->writeString($this->fullName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->post !== null) {
			
			$xfer += $output->writeFieldBegin('post');
			$xfer += $output->writeString($this->post);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobilePhone !== null) {
			
			$xfer += $output->writeFieldBegin('mobilePhone');
			$xfer += $output->writeString($this->mobilePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultFlag !== null) {
			
			$xfer += $output->writeFieldBegin('defaultFlag');
			$xfer += $output->writeI64($this->defaultFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->countryResult !== null) {
			
			$xfer += $output->writeFieldBegin('countryResult');
			$xfer += $output->writeString($this->countryResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceResult !== null) {
			
			$xfer += $output->writeFieldBegin('provinceResult');
			$xfer += $output->writeString($this->provinceResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityResult !== null) {
			
			$xfer += $output->writeFieldBegin('cityResult');
			$xfer += $output->writeString($this->cityResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->districtResult !== null) {
			
			$xfer += $output->writeFieldBegin('districtResult');
			$xfer += $output->writeString($this->districtResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>