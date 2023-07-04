<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcUserQuestionVo {
	
	static $_TSPEC;
	public $userNick = null;
	public $avatar = null;
	public $questionId = null;
	public $content = null;
	public $postTime = null;
	public $answerCount = null;
	public $answerList = null;
	
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
			'var' => 'questionId'
			),
			12002 => array(
			'var' => 'content'
			),
			12003 => array(
			'var' => 'postTime'
			),
			12006 => array(
			'var' => 'answerCount'
			),
			12007 => array(
			'var' => 'answerList'
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
			
			
			if (isset($vals['questionId'])){
				
				$this->questionId = $vals['questionId'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['postTime'])){
				
				$this->postTime = $vals['postTime'];
			}
			
			
			if (isset($vals['answerCount'])){
				
				$this->answerCount = $vals['answerCount'];
			}
			
			
			if (isset($vals['answerList'])){
				
				$this->answerList = $vals['answerList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcUserQuestionVo';
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
			
			
			
			
			if ("questionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->questionId);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("postTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postTime);
				
			}
			
			
			
			
			if ("answerCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->answerCount); 
				
			}
			
			
			
			
			if ("answerList" == $schemeField){
				
				$needSkip = false;
				
				$this->answerList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\vop\WpcUserAnswerVo();
						$elem0->read($input);
						
						$this->answerList[$_size0++] = $elem0;
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
		
		
		if($this->questionId !== null) {
			
			$xfer += $output->writeFieldBegin('questionId');
			$xfer += $output->writeString($this->questionId);
			
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
		
		
		if($this->answerCount !== null) {
			
			$xfer += $output->writeFieldBegin('answerCount');
			$xfer += $output->writeI32($this->answerCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->answerList !== null) {
			
			$xfer += $output->writeFieldBegin('answerList');
			
			if (!is_array($this->answerList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->answerList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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