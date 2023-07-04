<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class ReceiverInfoModel {
	
	static $_TSPEC;
	public $transport_no = null;
	public $name = null;
	public $phone = null;
	public $mobile = null;
	public $province = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $privacy_protection = null;
	public $expire_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'phone'
			),
			4 => array(
			'var' => 'mobile'
			),
			5 => array(
			'var' => 'province'
			),
			6 => array(
			'var' => 'city'
			),
			7 => array(
			'var' => 'region'
			),
			8 => array(
			'var' => 'town'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'privacy_protection'
			),
			11 => array(
			'var' => 'expire_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['privacy_protection'])){
				
				$this->privacy_protection = $vals['privacy_protection'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiverInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("privacy_protection" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->privacy_protection);
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time);
				
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
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
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
		
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->privacy_protection !== null) {
			
			$xfer += $output->writeFieldBegin('privacy_protection');
			$xfer += $output->writeBool($this->privacy_protection);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>