<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class RefundProgressInfo {
	
	static $_TSPEC;
	public $stepNum = null;
	public $stepName = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'stepNum'
			),
			2 => array(
			'var' => 'stepName'
			),
			3 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['stepNum'])){
				
				$this->stepNum = $vals['stepNum'];
			}
			
			
			if (isset($vals['stepName'])){
				
				$this->stepName = $vals['stepName'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefundProgressInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("stepNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stepNum); 
				
			}
			
			
			
			
			if ("stepName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stepName);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
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
		
		if($this->stepNum !== null) {
			
			$xfer += $output->writeFieldBegin('stepNum');
			$xfer += $output->writeI32($this->stepNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stepName !== null) {
			
			$xfer += $output->writeFieldBegin('stepName');
			$xfer += $output->writeString($this->stepName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>