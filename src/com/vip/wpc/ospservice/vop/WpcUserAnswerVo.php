<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcUserAnswerVo {
	
	static $_TSPEC;
	public $userNick = null;
	public $avatar = null;
	public $content = null;
	public $postTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12200 => array(
			'var' => 'userNick'
			),
			12201 => array(
			'var' => 'avatar'
			),
			12001 => array(
			'var' => 'content'
			),
			12002 => array(
			'var' => 'postTime'
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
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['postTime'])){
				
				$this->postTime = $vals['postTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcUserAnswerVo';
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
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("postTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postTime);
				
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
		
		
		if($this->content !== null) {
			
			$xfer += $output->writeFieldBegin('content');
			$xfer += $output->writeString($this->content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postTime !== null) {
			
			$xfer += $output->writeFieldBegin('postTime');
			$xfer += $output->writeString($this->postTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>