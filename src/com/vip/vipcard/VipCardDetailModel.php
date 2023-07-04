<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class VipCardDetailModel {
	
	static $_TSPEC;
	public $userId = null;
	public $faceMoney = null;
	public $validMoney = null;
	public $usedMoney = null;
	public $frozenMoney = null;
	public $expiredMoney = null;
	public $activateTime = null;
	public $startTime = null;
	public $stopTime = null;
	public $isUsed = null;
	public $isFrozen = null;
	public $isExpired = null;
	public $numberId = null;
	public $cardNumber = null;
	public $systemType = null;
	public $fromSource = null;
	public $fromChannel = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'faceMoney'
			),
			3 => array(
			'var' => 'validMoney'
			),
			4 => array(
			'var' => 'usedMoney'
			),
			5 => array(
			'var' => 'frozenMoney'
			),
			6 => array(
			'var' => 'expiredMoney'
			),
			7 => array(
			'var' => 'activateTime'
			),
			8 => array(
			'var' => 'startTime'
			),
			9 => array(
			'var' => 'stopTime'
			),
			10 => array(
			'var' => 'isUsed'
			),
			11 => array(
			'var' => 'isFrozen'
			),
			12 => array(
			'var' => 'isExpired'
			),
			13 => array(
			'var' => 'numberId'
			),
			14 => array(
			'var' => 'cardNumber'
			),
			15 => array(
			'var' => 'systemType'
			),
			16 => array(
			'var' => 'fromSource'
			),
			17 => array(
			'var' => 'fromChannel'
			),
			18 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['faceMoney'])){
				
				$this->faceMoney = $vals['faceMoney'];
			}
			
			
			if (isset($vals['validMoney'])){
				
				$this->validMoney = $vals['validMoney'];
			}
			
			
			if (isset($vals['usedMoney'])){
				
				$this->usedMoney = $vals['usedMoney'];
			}
			
			
			if (isset($vals['frozenMoney'])){
				
				$this->frozenMoney = $vals['frozenMoney'];
			}
			
			
			if (isset($vals['expiredMoney'])){
				
				$this->expiredMoney = $vals['expiredMoney'];
			}
			
			
			if (isset($vals['activateTime'])){
				
				$this->activateTime = $vals['activateTime'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['stopTime'])){
				
				$this->stopTime = $vals['stopTime'];
			}
			
			
			if (isset($vals['isUsed'])){
				
				$this->isUsed = $vals['isUsed'];
			}
			
			
			if (isset($vals['isFrozen'])){
				
				$this->isFrozen = $vals['isFrozen'];
			}
			
			
			if (isset($vals['isExpired'])){
				
				$this->isExpired = $vals['isExpired'];
			}
			
			
			if (isset($vals['numberId'])){
				
				$this->numberId = $vals['numberId'];
			}
			
			
			if (isset($vals['cardNumber'])){
				
				$this->cardNumber = $vals['cardNumber'];
			}
			
			
			if (isset($vals['systemType'])){
				
				$this->systemType = $vals['systemType'];
			}
			
			
			if (isset($vals['fromSource'])){
				
				$this->fromSource = $vals['fromSource'];
			}
			
			
			if (isset($vals['fromChannel'])){
				
				$this->fromChannel = $vals['fromChannel'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCardDetailModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("faceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->faceMoney);
				
			}
			
			
			
			
			if ("validMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->validMoney);
				
			}
			
			
			
			
			if ("usedMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->usedMoney);
				
			}
			
			
			
			
			if ("frozenMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->frozenMoney);
				
			}
			
			
			
			
			if ("expiredMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->expiredMoney);
				
			}
			
			
			
			
			if ("activateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateTime);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("stopTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stopTime);
				
			}
			
			
			
			
			if ("isUsed" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isUsed);
				
			}
			
			
			
			
			if ("isFrozen" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isFrozen);
				
			}
			
			
			
			
			if ("isExpired" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isExpired);
				
			}
			
			
			
			
			if ("numberId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->numberId); 
				
			}
			
			
			
			
			if ("cardNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cardNumber);
				
			}
			
			
			
			
			if ("systemType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->systemType); 
				
			}
			
			
			
			
			if ("fromSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fromSource);
				
			}
			
			
			
			
			if ("fromChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fromChannel);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->faceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('faceMoney');
			$xfer += $output->writeDouble($this->faceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validMoney !== null) {
			
			$xfer += $output->writeFieldBegin('validMoney');
			$xfer += $output->writeDouble($this->validMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usedMoney !== null) {
			
			$xfer += $output->writeFieldBegin('usedMoney');
			$xfer += $output->writeDouble($this->usedMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frozenMoney !== null) {
			
			$xfer += $output->writeFieldBegin('frozenMoney');
			$xfer += $output->writeDouble($this->frozenMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expiredMoney !== null) {
			
			$xfer += $output->writeFieldBegin('expiredMoney');
			$xfer += $output->writeDouble($this->expiredMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateTime');
			$xfer += $output->writeI64($this->activateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stopTime !== null) {
			
			$xfer += $output->writeFieldBegin('stopTime');
			$xfer += $output->writeI64($this->stopTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isUsed !== null) {
			
			$xfer += $output->writeFieldBegin('isUsed');
			$xfer += $output->writeBool($this->isUsed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isFrozen !== null) {
			
			$xfer += $output->writeFieldBegin('isFrozen');
			$xfer += $output->writeBool($this->isFrozen);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExpired !== null) {
			
			$xfer += $output->writeFieldBegin('isExpired');
			$xfer += $output->writeBool($this->isExpired);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->numberId !== null) {
			
			$xfer += $output->writeFieldBegin('numberId');
			$xfer += $output->writeI64($this->numberId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cardNumber !== null) {
			
			$xfer += $output->writeFieldBegin('cardNumber');
			$xfer += $output->writeString($this->cardNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->systemType !== null) {
			
			$xfer += $output->writeFieldBegin('systemType');
			$xfer += $output->writeI32($this->systemType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fromSource !== null) {
			
			$xfer += $output->writeFieldBegin('fromSource');
			$xfer += $output->writeString($this->fromSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fromChannel !== null) {
			
			$xfer += $output->writeFieldBegin('fromChannel');
			$xfer += $output->writeString($this->fromChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>