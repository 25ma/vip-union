<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class CompensateTxVideoRequest {
	
	static $_TSPEC;
	public $userId = null;
	public $txMemberType = null;
	public $txAccountType = null;
	public $txAccount = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'txMemberType'
			),
			3 => array(
			'var' => 'txAccountType'
			),
			4 => array(
			'var' => 'txAccount'
			),
			5 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['txMemberType'])){
				
				$this->txMemberType = $vals['txMemberType'];
			}
			
			
			if (isset($vals['txAccountType'])){
				
				$this->txAccountType = $vals['txAccountType'];
			}
			
			
			if (isset($vals['txAccount'])){
				
				$this->txAccount = $vals['txAccount'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CompensateTxVideoRequest';
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
			
			
			
			
			if ("txMemberType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->txMemberType); 
				
			}
			
			
			
			
			if ("txAccountType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->txAccountType); 
				
			}
			
			
			
			
			if ("txAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txAccount);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
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
		
		
		$xfer += $output->writeFieldBegin('txMemberType');
		$xfer += $output->writeI32($this->txMemberType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('txAccountType');
		$xfer += $output->writeI32($this->txAccountType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->txAccount !== null) {
			
			$xfer += $output->writeFieldBegin('txAccount');
			$xfer += $output->writeString($this->txAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>