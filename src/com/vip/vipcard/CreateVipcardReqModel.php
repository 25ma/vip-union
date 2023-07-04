<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class CreateVipcardReqModel {
	
	static $_TSPEC;
	public $requestId = null;
	public $merchant_code = null;
	public $cardFlag = null;
	public $faceMoney = null;
	public $cardProductCode = null;
	public $activateValidTime = null;
	public $useEffectDay = null;
	public $operationType = null;
	public $userId = null;
	public $phoneNo = null;
	public $activityId = null;
	public $activityNo = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			11 => array(
			'var' => 'requestId'
			),
			12 => array(
			'var' => 'merchant_code'
			),
			13 => array(
			'var' => 'cardFlag'
			),
			14 => array(
			'var' => 'faceMoney'
			),
			15 => array(
			'var' => 'cardProductCode'
			),
			16 => array(
			'var' => 'activateValidTime'
			),
			17 => array(
			'var' => 'useEffectDay'
			),
			18 => array(
			'var' => 'operationType'
			),
			19 => array(
			'var' => 'userId'
			),
			20 => array(
			'var' => 'phoneNo'
			),
			21 => array(
			'var' => 'activityId'
			),
			22 => array(
			'var' => 'activityNo'
			),
			23 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['cardFlag'])){
				
				$this->cardFlag = $vals['cardFlag'];
			}
			
			
			if (isset($vals['faceMoney'])){
				
				$this->faceMoney = $vals['faceMoney'];
			}
			
			
			if (isset($vals['cardProductCode'])){
				
				$this->cardProductCode = $vals['cardProductCode'];
			}
			
			
			if (isset($vals['activateValidTime'])){
				
				$this->activateValidTime = $vals['activateValidTime'];
			}
			
			
			if (isset($vals['useEffectDay'])){
				
				$this->useEffectDay = $vals['useEffectDay'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
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
			
			
			if (isset($vals['activityNo'])){
				
				$this->activityNo = $vals['activityNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateVipcardReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("merchant_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchant_code);
				
			}
			
			
			
			
			if ("cardFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cardFlag); 
				
			}
			
			
			
			
			if ("faceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faceMoney);
				
			}
			
			
			
			
			if ("cardProductCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cardProductCode); 
				
			}
			
			
			
			
			if ("activateValidTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activateValidTime);
				
			}
			
			
			
			
			if ("useEffectDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useEffectDay); 
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operationType); 
				
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
			
			
			
			
			if ("activityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityNo);
				
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
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cardFlag');
		$xfer += $output->writeI32($this->cardFlag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('faceMoney');
		$xfer += $output->writeString($this->faceMoney);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cardProductCode');
		$xfer += $output->writeI32($this->cardProductCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->activateValidTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateValidTime');
			$xfer += $output->writeString($this->activateValidTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEffectDay !== null) {
			
			$xfer += $output->writeFieldBegin('useEffectDay');
			$xfer += $output->writeI32($this->useEffectDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operationType');
		$xfer += $output->writeI32($this->operationType);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('activityId');
		$xfer += $output->writeString($this->activityId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->activityNo !== null) {
			
			$xfer += $output->writeFieldBegin('activityNo');
			$xfer += $output->writeString($this->activityNo);
			
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