<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcUserVo {
	
	static $_TSPEC;
	public $userId = null;
	public $channelUserId = null;
	public $registerTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'userId'
			),
			12002 => array(
			'var' => 'channelUserId'
			),
			12003 => array(
			'var' => 'registerTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['channelUserId'])){
				
				$this->channelUserId = $vals['channelUserId'];
			}
			
			
			if (isset($vals['registerTime'])){
				
				$this->registerTime = $vals['registerTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcUserVo';
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
			
			
			
			
			if ("channelUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelUserId);
				
			}
			
			
			
			
			if ("registerTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->registerTime);
				
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
		
		
		if($this->channelUserId !== null) {
			
			$xfer += $output->writeFieldBegin('channelUserId');
			$xfer += $output->writeString($this->channelUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->registerTime !== null) {
			
			$xfer += $output->writeFieldBegin('registerTime');
			$xfer += $output->writeString($this->registerTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>