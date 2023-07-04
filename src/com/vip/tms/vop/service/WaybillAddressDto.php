<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillAddressDto {
	
	static $_TSPEC;
	public $name = null;
	public $tel = null;
	public $mobile = null;
	public $country_name = null;
	public $province_name = null;
	public $city_name = null;
	public $region_name = null;
	public $town_name = null;
	public $address = null;
	public $post_code = null;
	public $address_code = null;
	public $name_encrypt = null;
	public $tel_encrypt = null;
	public $mobile_encrypt = null;
	public $address_encrypt = null;
	public $contract_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'tel'
			),
			3 => array(
			'var' => 'mobile'
			),
			4 => array(
			'var' => 'country_name'
			),
			5 => array(
			'var' => 'province_name'
			),
			6 => array(
			'var' => 'city_name'
			),
			7 => array(
			'var' => 'region_name'
			),
			8 => array(
			'var' => 'town_name'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'post_code'
			),
			11 => array(
			'var' => 'address_code'
			),
			12 => array(
			'var' => 'name_encrypt'
			),
			13 => array(
			'var' => 'tel_encrypt'
			),
			14 => array(
			'var' => 'mobile_encrypt'
			),
			15 => array(
			'var' => 'address_encrypt'
			),
			16 => array(
			'var' => 'contract_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['country_name'])){
				
				$this->country_name = $vals['country_name'];
			}
			
			
			if (isset($vals['province_name'])){
				
				$this->province_name = $vals['province_name'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['region_name'])){
				
				$this->region_name = $vals['region_name'];
			}
			
			
			if (isset($vals['town_name'])){
				
				$this->town_name = $vals['town_name'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['post_code'])){
				
				$this->post_code = $vals['post_code'];
			}
			
			
			if (isset($vals['address_code'])){
				
				$this->address_code = $vals['address_code'];
			}
			
			
			if (isset($vals['name_encrypt'])){
				
				$this->name_encrypt = $vals['name_encrypt'];
			}
			
			
			if (isset($vals['tel_encrypt'])){
				
				$this->tel_encrypt = $vals['tel_encrypt'];
			}
			
			
			if (isset($vals['mobile_encrypt'])){
				
				$this->mobile_encrypt = $vals['mobile_encrypt'];
			}
			
			
			if (isset($vals['address_encrypt'])){
				
				$this->address_encrypt = $vals['address_encrypt'];
			}
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillAddressDto';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("country_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country_name);
				
			}
			
			
			
			
			if ("province_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_name);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("region_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region_name);
				
			}
			
			
			
			
			if ("town_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town_name);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("post_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post_code);
				
			}
			
			
			
			
			if ("address_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address_code);
				
			}
			
			
			
			
			if ("name_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name_encrypt);
				
			}
			
			
			
			
			if ("tel_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel_encrypt);
				
			}
			
			
			
			
			if ("mobile_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile_encrypt);
				
			}
			
			
			
			
			if ("address_encrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address_encrypt);
				
			}
			
			
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
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
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country_name !== null) {
			
			$xfer += $output->writeFieldBegin('country_name');
			$xfer += $output->writeString($this->country_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_name !== null) {
			
			$xfer += $output->writeFieldBegin('province_name');
			$xfer += $output->writeString($this->province_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region_name !== null) {
			
			$xfer += $output->writeFieldBegin('region_name');
			$xfer += $output->writeString($this->region_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town_name !== null) {
			
			$xfer += $output->writeFieldBegin('town_name');
			$xfer += $output->writeString($this->town_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->post_code !== null) {
			
			$xfer += $output->writeFieldBegin('post_code');
			$xfer += $output->writeString($this->post_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address_code !== null) {
			
			$xfer += $output->writeFieldBegin('address_code');
			$xfer += $output->writeString($this->address_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('name_encrypt');
			$xfer += $output->writeString($this->name_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('tel_encrypt');
			$xfer += $output->writeString($this->tel_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('mobile_encrypt');
			$xfer += $output->writeString($this->mobile_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address_encrypt !== null) {
			
			$xfer += $output->writeFieldBegin('address_encrypt');
			$xfer += $output->writeString($this->address_encrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contract_id !== null) {
			
			$xfer += $output->writeFieldBegin('contract_id');
			$xfer += $output->writeString($this->contract_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>