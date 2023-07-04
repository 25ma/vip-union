<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class InvitedUserResponse {
	
	static $_TSPEC;
	public $ucode = null;
	public $registerTime = null;
	public $promoteStatus = null;
	public $inviterCodeType = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ucode'
			),
			2 => array(
			'var' => 'registerTime'
			),
			3 => array(
			'var' => 'promoteStatus'
			),
			4 => array(
			'var' => 'inviterCodeType'
			),
			5 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ucode'])){
				
				$this->ucode = $vals['ucode'];
			}
			
			
			if (isset($vals['registerTime'])){
				
				$this->registerTime = $vals['registerTime'];
			}
			
			
			if (isset($vals['promoteStatus'])){
				
				$this->promoteStatus = $vals['promoteStatus'];
			}
			
			
			if (isset($vals['inviterCodeType'])){
				
				$this->inviterCodeType = $vals['inviterCodeType'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvitedUserResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ucode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ucode);
				
			}
			
			
			
			
			if ("registerTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->registerTime); 
				
			}
			
			
			
			
			if ("promoteStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->promoteStatus); 
				
			}
			
			
			
			
			if ("inviterCodeType" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->inviterCodeType); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
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
		
		if($this->ucode !== null) {
			
			$xfer += $output->writeFieldBegin('ucode');
			$xfer += $output->writeString($this->ucode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->registerTime !== null) {
			
			$xfer += $output->writeFieldBegin('registerTime');
			$xfer += $output->writeI64($this->registerTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promoteStatus !== null) {
			
			$xfer += $output->writeFieldBegin('promoteStatus');
			$xfer += $output->writeI16($this->promoteStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inviterCodeType !== null) {
			
			$xfer += $output->writeFieldBegin('inviterCodeType');
			$xfer += $output->writeI16($this->inviterCodeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>