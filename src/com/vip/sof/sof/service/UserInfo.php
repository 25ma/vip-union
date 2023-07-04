<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class UserInfo {
	
	static $_TSPEC;
	public $userId = null;
	public $userName = null;
	public $userType = null;
	public $userTypeName = null;
	
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
			'var' => 'userType'
			),
			4 => array(
			'var' => 'userTypeName'
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
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
			}
			
			
			if (isset($vals['userTypeName'])){
				
				$this->userTypeName = $vals['userTypeName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserInfo';
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
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userType); 
				
			}
			
			
			
			
			if ("userTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userTypeName);
				
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
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeI32($this->userType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('userTypeName');
			$xfer += $output->writeString($this->userTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>