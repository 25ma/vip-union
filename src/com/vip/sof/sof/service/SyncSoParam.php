<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SyncSoParam {
	
	static $_TSPEC;
	public $times = null;
	public $processNum = null;
	public $processId = null;
	public $code = null;
	public $count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'times'
			),
			2 => array(
			'var' => 'processNum'
			),
			3 => array(
			'var' => 'processId'
			),
			4 => array(
			'var' => 'code'
			),
			5 => array(
			'var' => 'count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
			if (isset($vals['processNum'])){
				
				$this->processNum = $vals['processNum'];
			}
			
			
			if (isset($vals['processId'])){
				
				$this->processId = $vals['processId'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncSoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
			}
			
			
			
			
			if ("processNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processNum); 
				
			}
			
			
			
			
			if ("processId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processId); 
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
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
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processNum !== null) {
			
			$xfer += $output->writeFieldBegin('processNum');
			$xfer += $output->writeI32($this->processNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processId !== null) {
			
			$xfer += $output->writeFieldBegin('processId');
			$xfer += $output->writeI32($this->processId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>