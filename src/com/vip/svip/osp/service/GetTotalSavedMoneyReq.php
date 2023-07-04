<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GetTotalSavedMoneyReq {
	
	static $_TSPEC;
	public $userId = null;
	public $contractNo = null;
	public $startTime = null;
	public $endTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'contractNo'
			),
			3 => array(
			'var' => 'startTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['contractNo'])){
				
				$this->contractNo = $vals['contractNo'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTotalSavedMoneyReq';
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
			
			
			
			
			if ("contractNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractNo);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractNo');
		$xfer += $output->writeString($this->contractNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>