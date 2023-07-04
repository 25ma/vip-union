<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\goodsExt;

class CronParam {
	
	static $_TSPEC;
	public $appName = null;
	public $count = null;
	public $processNum = null;
	public $processId = null;
	public $retryTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'count'
			),
			3 => array(
			'var' => 'processNum'
			),
			4 => array(
			'var' => 'processId'
			),
			5 => array(
			'var' => 'retryTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['processNum'])){
				
				$this->processNum = $vals['processNum'];
			}
			
			
			if (isset($vals['processId'])){
				
				$this->processId = $vals['processId'];
			}
			
			
			if (isset($vals['retryTime'])){
				
				$this->retryTime = $vals['retryTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CronParam';
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
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("processNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processNum); 
				
			}
			
			
			
			
			if ("processId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->processId); 
				
			}
			
			
			
			
			if ("retryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->retryTime); 
				
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
		
		if($this->appName !== null) {
			
			$xfer += $output->writeFieldBegin('appName');
			$xfer += $output->writeString($this->appName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('processNum');
		$xfer += $output->writeI32($this->processNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('processId');
		$xfer += $output->writeI32($this->processId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('retryTime');
		$xfer += $output->writeI32($this->retryTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>