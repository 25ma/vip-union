<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\hcscm\purchase\service;

class EmailSendResp {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $total = null;
	public $sendCount = null;
	public $outLimitCount = null;
	public $notSubCount = null;
	public $taskId = null;
	public $failCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			10001 => array(
			'var' => 'code'
			),
			10002 => array(
			'var' => 'msg'
			),
			1 => array(
			'var' => 'total'
			),
			2 => array(
			'var' => 'sendCount'
			),
			3 => array(
			'var' => 'outLimitCount'
			),
			4 => array(
			'var' => 'notSubCount'
			),
			5 => array(
			'var' => 'taskId'
			),
			6 => array(
			'var' => 'failCount'
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
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['sendCount'])){
				
				$this->sendCount = $vals['sendCount'];
			}
			
			
			if (isset($vals['outLimitCount'])){
				
				$this->outLimitCount = $vals['outLimitCount'];
			}
			
			
			if (isset($vals['notSubCount'])){
				
				$this->notSubCount = $vals['notSubCount'];
			}
			
			
			if (isset($vals['taskId'])){
				
				$this->taskId = $vals['taskId'];
			}
			
			
			if (isset($vals['failCount'])){
				
				$this->failCount = $vals['failCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EmailSendResp';
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
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->total); 
				
			}
			
			
			
			
			if ("sendCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sendCount); 
				
			}
			
			
			
			
			if ("outLimitCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->outLimitCount); 
				
			}
			
			
			
			
			if ("notSubCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->notSubCount); 
				
			}
			
			
			
			
			if ("taskId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taskId);
				
			}
			
			
			
			
			if ("failCount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->failCount); 
				
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
		
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI64($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sendCount');
		$xfer += $output->writeI64($this->sendCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('outLimitCount');
		$xfer += $output->writeI64($this->outLimitCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('notSubCount');
		$xfer += $output->writeI64($this->notSubCount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taskId !== null) {
			
			$xfer += $output->writeFieldBegin('taskId');
			$xfer += $output->writeString($this->taskId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('failCount');
		$xfer += $output->writeI64($this->failCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>