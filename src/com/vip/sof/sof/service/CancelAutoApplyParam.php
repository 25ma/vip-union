<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CancelAutoApplyParam {
	
	static $_TSPEC;
	public $autoApplyTime = null;
	public $autoApplyResult = null;
	public $autoApplyCount = null;
	public $exemptStartTime = null;
	public $exemptEndTime = null;
	public $secondAutoApplyTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoApplyTime'
			),
			2 => array(
			'var' => 'autoApplyResult'
			),
			3 => array(
			'var' => 'autoApplyCount'
			),
			4 => array(
			'var' => 'exemptStartTime'
			),
			5 => array(
			'var' => 'exemptEndTime'
			),
			6 => array(
			'var' => 'secondAutoApplyTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoApplyTime'])){
				
				$this->autoApplyTime = $vals['autoApplyTime'];
			}
			
			
			if (isset($vals['autoApplyResult'])){
				
				$this->autoApplyResult = $vals['autoApplyResult'];
			}
			
			
			if (isset($vals['autoApplyCount'])){
				
				$this->autoApplyCount = $vals['autoApplyCount'];
			}
			
			
			if (isset($vals['exemptStartTime'])){
				
				$this->exemptStartTime = $vals['exemptStartTime'];
			}
			
			
			if (isset($vals['exemptEndTime'])){
				
				$this->exemptEndTime = $vals['exemptEndTime'];
			}
			
			
			if (isset($vals['secondAutoApplyTime'])){
				
				$this->secondAutoApplyTime = $vals['secondAutoApplyTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelAutoApplyParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("autoApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoApplyTime); 
				
			}
			
			
			
			
			if ("autoApplyResult" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoApplyResult); 
				
			}
			
			
			
			
			if ("autoApplyCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoApplyCount); 
				
			}
			
			
			
			
			if ("exemptStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exemptStartTime);
				
			}
			
			
			
			
			if ("exemptEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exemptEndTime);
				
			}
			
			
			
			
			if ("secondAutoApplyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->secondAutoApplyTime); 
				
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
		
		if($this->autoApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyTime');
			$xfer += $output->writeI32($this->autoApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoApplyResult !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyResult');
			$xfer += $output->writeI32($this->autoApplyResult);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoApplyCount !== null) {
			
			$xfer += $output->writeFieldBegin('autoApplyCount');
			$xfer += $output->writeI32($this->autoApplyCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exemptStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('exemptStartTime');
			$xfer += $output->writeString($this->exemptStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exemptEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('exemptEndTime');
			$xfer += $output->writeString($this->exemptEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->secondAutoApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('secondAutoApplyTime');
			$xfer += $output->writeI32($this->secondAutoApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>