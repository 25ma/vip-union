<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcUserBaseInfoVo {
	
	static $_TSPEC;
	public $userNick = null;
	public $avatar = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12200 => array(
			'var' => 'userNick'
			),
			12201 => array(
			'var' => 'avatar'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userNick'])){
				
				$this->userNick = $vals['userNick'];
			}
			
			
			if (isset($vals['avatar'])){
				
				$this->avatar = $vals['avatar'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcUserBaseInfoVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userNick" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNick);
				
			}
			
			
			
			
			if ("avatar" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->avatar);
				
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
		
		if($this->userNick !== null) {
			
			$xfer += $output->writeFieldBegin('userNick');
			$xfer += $output->writeString($this->userNick);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->avatar !== null) {
			
			$xfer += $output->writeFieldBegin('avatar');
			$xfer += $output->writeString($this->avatar);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>