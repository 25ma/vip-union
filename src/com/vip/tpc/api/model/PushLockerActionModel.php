<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class PushLockerActionModel {
	
	static $_TSPEC;
	public $carrierCode = null;
	public $transportNo = null;
	public $orderId = null;
	public $lockerCode = null;
	public $expiresTime = null;
	public $edCode = null;
	public $actionCode = null;
	public $remark = null;
	public $originalActionCode = null;
	public $lockerAddress = null;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierCode'
			),
			2 => array(
			'var' => 'transportNo'
			),
			3 => array(
			'var' => 'orderId'
			),
			4 => array(
			'var' => 'lockerCode'
			),
			5 => array(
			'var' => 'expiresTime'
			),
			6 => array(
			'var' => 'edCode'
			),
			7 => array(
			'var' => 'actionCode'
			),
			8 => array(
			'var' => 'remark'
			),
			9 => array(
			'var' => 'originalActionCode'
			),
			10 => array(
			'var' => 'lockerAddress'
			),
			11 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['lockerCode'])){
				
				$this->lockerCode = $vals['lockerCode'];
			}
			
			
			if (isset($vals['expiresTime'])){
				
				$this->expiresTime = $vals['expiresTime'];
			}
			
			
			if (isset($vals['edCode'])){
				
				$this->edCode = $vals['edCode'];
			}
			
			
			if (isset($vals['actionCode'])){
				
				$this->actionCode = $vals['actionCode'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['originalActionCode'])){
				
				$this->originalActionCode = $vals['originalActionCode'];
			}
			
			
			if (isset($vals['lockerAddress'])){
				
				$this->lockerAddress = $vals['lockerAddress'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushLockerActionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("lockerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lockerCode);
				
			}
			
			
			
			
			if ("expiresTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expiresTime); 
				
			}
			
			
			
			
			if ("edCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edCode);
				
			}
			
			
			
			
			if ("actionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionCode);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("originalActionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalActionCode);
				
			}
			
			
			
			
			if ("lockerAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lockerAddress);
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
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
		
		$xfer += $output->writeFieldBegin('carrierCode');
		$xfer += $output->writeString($this->carrierCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderId');
		$xfer += $output->writeString($this->orderId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->lockerCode !== null) {
			
			$xfer += $output->writeFieldBegin('lockerCode');
			$xfer += $output->writeString($this->lockerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expiresTime !== null) {
			
			$xfer += $output->writeFieldBegin('expiresTime');
			$xfer += $output->writeI64($this->expiresTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edCode !== null) {
			
			$xfer += $output->writeFieldBegin('edCode');
			$xfer += $output->writeString($this->edCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionCode !== null) {
			
			$xfer += $output->writeFieldBegin('actionCode');
			$xfer += $output->writeString($this->actionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalActionCode !== null) {
			
			$xfer += $output->writeFieldBegin('originalActionCode');
			$xfer += $output->writeString($this->originalActionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lockerAddress !== null) {
			
			$xfer += $output->writeFieldBegin('lockerAddress');
			$xfer += $output->writeString($this->lockerAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>