<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SaveMoneyInformation {
	
	static $_TSPEC;
	public $discountSaveAmount = null;
	public $discountSaveAmountType = null;
	public $carriageSaveAmount = null;
	public $carriageSaveAmountType = null;
	public $birthdaySaveAmount = null;
	public $birthdaySaveAmountType = null;
	public $totalSaveAmount = null;
	public $type = null;
	public $rankingPercent = null;
	public $saveBeginTime = null;
	public $saveEndTime = null;
	public $currentSaveAmount = null;
	public $saveMultiple = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'discountSaveAmount'
			),
			2 => array(
			'var' => 'discountSaveAmountType'
			),
			3 => array(
			'var' => 'carriageSaveAmount'
			),
			4 => array(
			'var' => 'carriageSaveAmountType'
			),
			5 => array(
			'var' => 'birthdaySaveAmount'
			),
			6 => array(
			'var' => 'birthdaySaveAmountType'
			),
			7 => array(
			'var' => 'totalSaveAmount'
			),
			8 => array(
			'var' => 'type'
			),
			9 => array(
			'var' => 'rankingPercent'
			),
			10 => array(
			'var' => 'saveBeginTime'
			),
			11 => array(
			'var' => 'saveEndTime'
			),
			12 => array(
			'var' => 'currentSaveAmount'
			),
			13 => array(
			'var' => 'saveMultiple'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['discountSaveAmount'])){
				
				$this->discountSaveAmount = $vals['discountSaveAmount'];
			}
			
			
			if (isset($vals['discountSaveAmountType'])){
				
				$this->discountSaveAmountType = $vals['discountSaveAmountType'];
			}
			
			
			if (isset($vals['carriageSaveAmount'])){
				
				$this->carriageSaveAmount = $vals['carriageSaveAmount'];
			}
			
			
			if (isset($vals['carriageSaveAmountType'])){
				
				$this->carriageSaveAmountType = $vals['carriageSaveAmountType'];
			}
			
			
			if (isset($vals['birthdaySaveAmount'])){
				
				$this->birthdaySaveAmount = $vals['birthdaySaveAmount'];
			}
			
			
			if (isset($vals['birthdaySaveAmountType'])){
				
				$this->birthdaySaveAmountType = $vals['birthdaySaveAmountType'];
			}
			
			
			if (isset($vals['totalSaveAmount'])){
				
				$this->totalSaveAmount = $vals['totalSaveAmount'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['rankingPercent'])){
				
				$this->rankingPercent = $vals['rankingPercent'];
			}
			
			
			if (isset($vals['saveBeginTime'])){
				
				$this->saveBeginTime = $vals['saveBeginTime'];
			}
			
			
			if (isset($vals['saveEndTime'])){
				
				$this->saveEndTime = $vals['saveEndTime'];
			}
			
			
			if (isset($vals['currentSaveAmount'])){
				
				$this->currentSaveAmount = $vals['currentSaveAmount'];
			}
			
			
			if (isset($vals['saveMultiple'])){
				
				$this->saveMultiple = $vals['saveMultiple'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SaveMoneyInformation';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("discountSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountSaveAmount);
				
			}
			
			
			
			
			if ("discountSaveAmountType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->discountSaveAmountType); 
				
			}
			
			
			
			
			if ("carriageSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriageSaveAmount);
				
			}
			
			
			
			
			if ("carriageSaveAmountType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->carriageSaveAmountType); 
				
			}
			
			
			
			
			if ("birthdaySaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->birthdaySaveAmount);
				
			}
			
			
			
			
			if ("birthdaySaveAmountType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->birthdaySaveAmountType); 
				
			}
			
			
			
			
			if ("totalSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalSaveAmount);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("rankingPercent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rankingPercent);
				
			}
			
			
			
			
			if ("saveBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->saveBeginTime); 
				
			}
			
			
			
			
			if ("saveEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->saveEndTime); 
				
			}
			
			
			
			
			if ("currentSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currentSaveAmount);
				
			}
			
			
			
			
			if ("saveMultiple" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saveMultiple);
				
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
		
		if($this->discountSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('discountSaveAmount');
			$xfer += $output->writeString($this->discountSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('discountSaveAmountType');
		$xfer += $output->writeI32($this->discountSaveAmountType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carriageSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('carriageSaveAmount');
			$xfer += $output->writeString($this->carriageSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carriageSaveAmountType');
		$xfer += $output->writeI32($this->carriageSaveAmountType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->birthdaySaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('birthdaySaveAmount');
			$xfer += $output->writeString($this->birthdaySaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('birthdaySaveAmountType');
		$xfer += $output->writeI32($this->birthdaySaveAmountType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->totalSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalSaveAmount');
			$xfer += $output->writeString($this->totalSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rankingPercent !== null) {
			
			$xfer += $output->writeFieldBegin('rankingPercent');
			$xfer += $output->writeString($this->rankingPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saveBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('saveBeginTime');
			$xfer += $output->writeI64($this->saveBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saveEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('saveEndTime');
			$xfer += $output->writeI64($this->saveEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currentSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('currentSaveAmount');
			$xfer += $output->writeString($this->currentSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saveMultiple !== null) {
			
			$xfer += $output->writeFieldBegin('saveMultiple');
			$xfer += $output->writeString($this->saveMultiple);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>