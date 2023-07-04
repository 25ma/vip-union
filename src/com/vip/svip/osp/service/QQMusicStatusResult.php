<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class QQMusicStatusResult {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $status = null;
	public $accountType = null;
	public $nickName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'accountType'
			),
			5 => array(
			'var' => 'nickName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['accountType'])){
				
				$this->accountType = $vals['accountType'];
			}
			
			
			if (isset($vals['nickName'])){
				
				$this->nickName = $vals['nickName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QQMusicStatusResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("accountType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->accountType); 
				
			}
			
			
			
			
			if ("nickName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nickName);
				
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
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeI32($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountType !== null) {
			
			$xfer += $output->writeFieldBegin('accountType');
			$xfer += $output->writeI32($this->accountType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nickName !== null) {
			
			$xfer += $output->writeFieldBegin('nickName');
			$xfer += $output->writeString($this->nickName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>