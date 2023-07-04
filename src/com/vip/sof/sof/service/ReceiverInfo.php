<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class ReceiverInfo {
	
	static $_TSPEC;
	public $shippingMethod = null;
	public $buyer = null;
	public $tel = null;
	public $mobile = null;
	public $transportTime = null;
	public $transportDay = null;
	public $addressType = null;
	public $address = null;
	public $areaId = null;
	public $postcode = null;
	public $countryId = null;
	public $state = null;
	public $city = null;
	public $county = null;
	public $buyerEncrypt = null;
	public $telEncrypt = null;
	public $mobileEncrypt = null;
	public $addressEncrypt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shippingMethod'
			),
			2 => array(
			'var' => 'buyer'
			),
			3 => array(
			'var' => 'tel'
			),
			4 => array(
			'var' => 'mobile'
			),
			5 => array(
			'var' => 'transportTime'
			),
			6 => array(
			'var' => 'transportDay'
			),
			7 => array(
			'var' => 'addressType'
			),
			8 => array(
			'var' => 'address'
			),
			9 => array(
			'var' => 'areaId'
			),
			10 => array(
			'var' => 'postcode'
			),
			11 => array(
			'var' => 'countryId'
			),
			12 => array(
			'var' => 'state'
			),
			13 => array(
			'var' => 'city'
			),
			14 => array(
			'var' => 'county'
			),
			15 => array(
			'var' => 'buyerEncrypt'
			),
			16 => array(
			'var' => 'telEncrypt'
			),
			17 => array(
			'var' => 'mobileEncrypt'
			),
			18 => array(
			'var' => 'addressEncrypt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shippingMethod'])){
				
				$this->shippingMethod = $vals['shippingMethod'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['transportTime'])){
				
				$this->transportTime = $vals['transportTime'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['addressType'])){
				
				$this->addressType = $vals['addressType'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['countryId'])){
				
				$this->countryId = $vals['countryId'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['county'])){
				
				$this->county = $vals['county'];
			}
			
			
			if (isset($vals['buyerEncrypt'])){
				
				$this->buyerEncrypt = $vals['buyerEncrypt'];
			}
			
			
			if (isset($vals['telEncrypt'])){
				
				$this->telEncrypt = $vals['telEncrypt'];
			}
			
			
			if (isset($vals['mobileEncrypt'])){
				
				$this->mobileEncrypt = $vals['mobileEncrypt'];
			}
			
			
			if (isset($vals['addressEncrypt'])){
				
				$this->addressEncrypt = $vals['addressEncrypt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiverInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shippingMethod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shippingMethod); 
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("transportTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportTime);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("addressType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addressType);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("countryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->countryId);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->county);
				
			}
			
			
			
			
			if ("buyerEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerEncrypt);
				
			}
			
			
			
			
			if ("telEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telEncrypt);
				
			}
			
			
			
			
			if ("mobileEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileEncrypt);
				
			}
			
			
			
			
			if ("addressEncrypt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addressEncrypt);
				
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
		
		if($this->shippingMethod !== null) {
			
			$xfer += $output->writeFieldBegin('shippingMethod');
			$xfer += $output->writeI32($this->shippingMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
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
		
		
		if($this->transportTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportTime');
			$xfer += $output->writeString($this->transportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addressType !== null) {
			
			$xfer += $output->writeFieldBegin('addressType');
			$xfer += $output->writeString($this->addressType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->countryId !== null) {
			
			$xfer += $output->writeFieldBegin('countryId');
			$xfer += $output->writeString($this->countryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->county !== null) {
			
			$xfer += $output->writeFieldBegin('county');
			$xfer += $output->writeString($this->county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('buyerEncrypt');
			$xfer += $output->writeString($this->buyerEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('telEncrypt');
			$xfer += $output->writeString($this->telEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('mobileEncrypt');
			$xfer += $output->writeString($this->mobileEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addressEncrypt !== null) {
			
			$xfer += $output->writeFieldBegin('addressEncrypt');
			$xfer += $output->writeString($this->addressEncrypt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>