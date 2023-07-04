<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipcard;

class GroupDataModel {
	
	static $_TSPEC;
	public $id = null;
	public $activityFlag = null;
	public $activityName = null;
	public $merchantCode = null;
	public $total = null;
	public $money = null;
	public $financeFlag = null;
	public $numberFlag = null;
	public $cancelFlag = null;
	public $activateCount = null;
	public $usableCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'activityFlag'
			),
			3 => array(
			'var' => 'activityName'
			),
			4 => array(
			'var' => 'merchantCode'
			),
			5 => array(
			'var' => 'total'
			),
			6 => array(
			'var' => 'money'
			),
			7 => array(
			'var' => 'financeFlag'
			),
			8 => array(
			'var' => 'numberFlag'
			),
			9 => array(
			'var' => 'cancelFlag'
			),
			10 => array(
			'var' => 'activateCount'
			),
			11 => array(
			'var' => 'usableCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['activityFlag'])){
				
				$this->activityFlag = $vals['activityFlag'];
			}
			
			
			if (isset($vals['activityName'])){
				
				$this->activityName = $vals['activityName'];
			}
			
			
			if (isset($vals['merchantCode'])){
				
				$this->merchantCode = $vals['merchantCode'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['financeFlag'])){
				
				$this->financeFlag = $vals['financeFlag'];
			}
			
			
			if (isset($vals['numberFlag'])){
				
				$this->numberFlag = $vals['numberFlag'];
			}
			
			
			if (isset($vals['cancelFlag'])){
				
				$this->cancelFlag = $vals['cancelFlag'];
			}
			
			
			if (isset($vals['activateCount'])){
				
				$this->activateCount = $vals['activateCount'];
			}
			
			
			if (isset($vals['usableCount'])){
				
				$this->usableCount = $vals['usableCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GroupDataModel';
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
			
			
			
			
			if ("activityFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityFlag);
				
			}
			
			
			
			
			if ("activityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityName);
				
			}
			
			
			
			
			if ("merchantCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchantCode);
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->total);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("financeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->financeFlag);
				
			}
			
			
			
			
			if ("numberFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->numberFlag);
				
			}
			
			
			
			
			if ("cancelFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelFlag);
				
			}
			
			
			
			
			if ("activateCount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activateCount);
				
			}
			
			
			
			
			if ("usableCount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->usableCount);
				
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
		
		
		if($this->activityFlag !== null) {
			
			$xfer += $output->writeFieldBegin('activityFlag');
			$xfer += $output->writeString($this->activityFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityName !== null) {
			
			$xfer += $output->writeFieldBegin('activityName');
			$xfer += $output->writeString($this->activityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchantCode !== null) {
			
			$xfer += $output->writeFieldBegin('merchantCode');
			$xfer += $output->writeString($this->merchantCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeString($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->financeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('financeFlag');
			$xfer += $output->writeString($this->financeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->numberFlag !== null) {
			
			$xfer += $output->writeFieldBegin('numberFlag');
			$xfer += $output->writeString($this->numberFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelFlag !== null) {
			
			$xfer += $output->writeFieldBegin('cancelFlag');
			$xfer += $output->writeString($this->cancelFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateCount !== null) {
			
			$xfer += $output->writeFieldBegin('activateCount');
			$xfer += $output->writeString($this->activateCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usableCount !== null) {
			
			$xfer += $output->writeFieldBegin('usableCount');
			$xfer += $output->writeString($this->usableCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>