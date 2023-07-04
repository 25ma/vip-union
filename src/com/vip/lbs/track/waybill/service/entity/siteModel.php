<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\track\waybill\service\entity;

class siteModel {
	
	static $_TSPEC;
	public $site_code = null;
	public $site_name = null;
	public $is_abandon = null;
	public $update_time = null;
	public $province = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $country = null;
	public $site_type = null;
	public $tel = null;
	public $name = null;
	public $longtitude = null;
	public $latitude = null;
	public $coordinate_sys = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'site_code'
			),
			2 => array(
			'var' => 'site_name'
			),
			3 => array(
			'var' => 'is_abandon'
			),
			4 => array(
			'var' => 'update_time'
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
			'var' => 'country'
			),
			11 => array(
			'var' => 'site_type'
			),
			12 => array(
			'var' => 'tel'
			),
			13 => array(
			'var' => 'name'
			),
			14 => array(
			'var' => 'longtitude'
			),
			15 => array(
			'var' => 'latitude'
			),
			16 => array(
			'var' => 'coordinate_sys'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['site_code'])){
				
				$this->site_code = $vals['site_code'];
			}
			
			
			if (isset($vals['site_name'])){
				
				$this->site_name = $vals['site_name'];
			}
			
			
			if (isset($vals['is_abandon'])){
				
				$this->is_abandon = $vals['is_abandon'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
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
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['site_type'])){
				
				$this->site_type = $vals['site_type'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['longtitude'])){
				
				$this->longtitude = $vals['longtitude'];
			}
			
			
			if (isset($vals['latitude'])){
				
				$this->latitude = $vals['latitude'];
			}
			
			
			if (isset($vals['coordinate_sys'])){
				
				$this->coordinate_sys = $vals['coordinate_sys'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'siteModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("site_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_code);
				
			}
			
			
			
			
			if ("site_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_name);
				
			}
			
			
			
			
			if ("is_abandon" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_abandon); 
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
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
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("site_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_type);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("longtitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longtitude);
				
			}
			
			
			
			
			if ("latitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latitude);
				
			}
			
			
			
			
			if ("coordinate_sys" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->coordinate_sys); 
				
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
		
		$xfer += $output->writeFieldBegin('site_code');
		$xfer += $output->writeString($this->site_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->site_name !== null) {
			
			$xfer += $output->writeFieldBegin('site_name');
			$xfer += $output->writeString($this->site_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_abandon');
		$xfer += $output->writeI32($this->is_abandon);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('update_time');
		$xfer += $output->writeString($this->update_time);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->site_type !== null) {
			
			$xfer += $output->writeFieldBegin('site_type');
			$xfer += $output->writeString($this->site_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->longtitude !== null) {
			
			$xfer += $output->writeFieldBegin('longtitude');
			$xfer += $output->writeString($this->longtitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latitude !== null) {
			
			$xfer += $output->writeFieldBegin('latitude');
			$xfer += $output->writeString($this->latitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coordinate_sys !== null) {
			
			$xfer += $output->writeFieldBegin('coordinate_sys');
			$xfer += $output->writeI32($this->coordinate_sys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>