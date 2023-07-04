<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class VipcardInfoModel {
	
	static $_TSPEC;
	public $id = null;
	public $cardNumber = null;
	public $cardFlag = null;
	public $status = null;
	public $cardProductCode = null;
	public $faceMoney = null;
	public $activeValidTime = null;
	public $useEffectDay = null;
	public $merchantCode = null;
	public $userId = null;
	public $phoneNo = null;
	public $activityId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'cardNumber'
			),
			3 => array(
			'var' => 'cardFlag'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'cardProductCode'
			),
			6 => array(
			'var' => 'faceMoney'
			),
			7 => array(
			'var' => 'activeValidTime'
			),
			8 => array(
			'var' => 'useEffectDay'
			),
			9 => array(
			'var' => 'merchantCode'
			),
			10 => array(
			'var' => 'userId'
			),
			11 => array(
			'var' => 'phoneNo'
			),
			12 => array(
			'var' => 'activityId'
			),
			13 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['cardNumber'])){
				
				$this->cardNumber = $vals['cardNumber'];
			}
			
			
			if (isset($vals['cardFlag'])){
				
				$this->cardFlag = $vals['cardFlag'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['cardProductCode'])){
				
				$this->cardProductCode = $vals['cardProductCode'];
			}
			
			
			if (isset($vals['faceMoney'])){
				
				$this->faceMoney = $vals['faceMoney'];
			}
			
			
			if (isset($vals['activeValidTime'])){
				
				$this->activeValidTime = $vals['activeValidTime'];
			}
			
			
			if (isset($vals['useEffectDay'])){
				
				$this->useEffectDay = $vals['useEffectDay'];
			}
			
			
			if (isset($vals['merchantCode'])){
				
				$this->merchantCode = $vals['merchantCode'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['phoneNo'])){
				
				$this->phoneNo = $vals['phoneNo'];
			}
			
			
			if (isset($vals['activityId'])){
				
				$this->activityId = $vals['activityId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipcardInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("cardNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cardNumber);
				
			}
			
			
			
			
			if ("cardFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cardFlag); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("cardProductCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cardProductCode); 
				
			}
			
			
			
			
			if ("faceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faceMoney);
				
			}
			
			
			
			
			if ("activeValidTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeValidTime);
				
			}
			
			
			
			
			if ("useEffectDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useEffectDay); 
				
			}
			
			
			
			
			if ("merchantCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchantCode);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("phoneNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneNo);
				
			}
			
			
			
			
			if ("activityId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
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
			$xfer += $output->writeString($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardNumber !== null) {
			
			$xfer += $output->writeFieldBegin('cardNumber');
			$xfer += $output->writeString($this->cardNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardFlag !== null) {
			
			$xfer += $output->writeFieldBegin('cardFlag');
			$xfer += $output->writeI32($this->cardFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardProductCode !== null) {
			
			$xfer += $output->writeFieldBegin('cardProductCode');
			$xfer += $output->writeI32($this->cardProductCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->faceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('faceMoney');
			$xfer += $output->writeString($this->faceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeValidTime !== null) {
			
			$xfer += $output->writeFieldBegin('activeValidTime');
			$xfer += $output->writeString($this->activeValidTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEffectDay !== null) {
			
			$xfer += $output->writeFieldBegin('useEffectDay');
			$xfer += $output->writeI32($this->useEffectDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchantCode !== null) {
			
			$xfer += $output->writeFieldBegin('merchantCode');
			$xfer += $output->writeString($this->merchantCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phoneNo !== null) {
			
			$xfer += $output->writeFieldBegin('phoneNo');
			$xfer += $output->writeString($this->phoneNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityId !== null) {
			
			$xfer += $output->writeFieldBegin('activityId');
			$xfer += $output->writeString($this->activityId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>