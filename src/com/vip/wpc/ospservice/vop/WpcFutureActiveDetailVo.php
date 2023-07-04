<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcFutureActiveDetailVo {
	
	static $_TSPEC;
	public $startTime = null;
	public $endTime = null;
	public $activeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'startTime'
			),
			12002 => array(
			'var' => 'endTime'
			),
			12003 => array(
			'var' => 'activeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['activeName'])){
				
				$this->activeName = $vals['activeName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcFutureActiveDetailVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endTime);
				
			}
			
			
			
			
			if ("activeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activeName);
				
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
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeString($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeString($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activeName !== null) {
			
			$xfer += $output->writeFieldBegin('activeName');
			$xfer += $output->writeString($this->activeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>