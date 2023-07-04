<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PushOfcTransportCron {
	
	static $_TSPEC;
	public $appName = null;
	public $times = null;
	public $count = null;
	public $runningWay = null;
	public $processNum = null;
	public $processId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'times'
			),
			3 => array(
			'var' => 'count'
			),
			4 => array(
			'var' => 'runningWay'
			),
			5 => array(
			'var' => 'processNum'
			),
			6 => array(
			'var' => 'processId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['runningWay'])){
				
				$this->runningWay = $vals['runningWay'];
			}
			
			
			if (isset($vals['processNum'])){
				
				$this->processNum = $vals['processNum'];
			}
			
			
			if (isset($vals['processId'])){
				
				$this->processId = $vals['processId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushOfcTransportCron';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appName);
				
			}
			
			
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("runningWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->runningWay);
				
			}
			
			
			
			
			if ("processNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processNum); 
				
			}
			
			
			
			
			if ("processId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processId); 
				
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
		
		$xfer += $output->writeFieldBegin('appName');
		$xfer += $output->writeString($this->appName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningWay !== null) {
			
			$xfer += $output->writeFieldBegin('runningWay');
			$xfer += $output->writeString($this->runningWay);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>