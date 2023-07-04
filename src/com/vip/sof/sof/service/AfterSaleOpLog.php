<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AfterSaleOpLog {
	
	static $_TSPEC;
	public $userId = null;
	public $userName = null;
	public $opTime = null;
	public $opResultName = null;
	public $opinion = null;
	public $fids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'userName'
			),
			3 => array(
			'var' => 'opTime'
			),
			5 => array(
			'var' => 'opResultName'
			),
			6 => array(
			'var' => 'opinion'
			),
			7 => array(
			'var' => 'fids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['userName'])){
				
				$this->userName = $vals['userName'];
			}
			
			
			if (isset($vals['opTime'])){
				
				$this->opTime = $vals['opTime'];
			}
			
			
			if (isset($vals['opResultName'])){
				
				$this->opResultName = $vals['opResultName'];
			}
			
			
			if (isset($vals['opinion'])){
				
				$this->opinion = $vals['opinion'];
			}
			
			
			if (isset($vals['fids'])){
				
				$this->fids = $vals['fids'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleOpLog';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("opTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opTime);
				
			}
			
			
			
			
			if ("opResultName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opResultName);
				
			}
			
			
			
			
			if ("opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opinion);
				
			}
			
			
			
			
			if ("fids" == $schemeField){
				
				$needSkip = false;
				
				$this->fids = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->fids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opTime !== null) {
			
			$xfer += $output->writeFieldBegin('opTime');
			$xfer += $output->writeString($this->opTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opResultName !== null) {
			
			$xfer += $output->writeFieldBegin('opResultName');
			$xfer += $output->writeString($this->opResultName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opinion !== null) {
			
			$xfer += $output->writeFieldBegin('opinion');
			$xfer += $output->writeString($this->opinion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fids !== null) {
			
			$xfer += $output->writeFieldBegin('fids');
			
			if (!is_array($this->fids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>