<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class SubscribeLbsParam {
	
	static $_TSPEC;
	public $appName = null;
	public $count = null;
	public $times = null;
	public $grayScale = null;
	
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
			'var' => 'times'
			),
			4 => array(
			'var' => 'grayScale'
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
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
			if (isset($vals['grayScale'])){
				
				$this->grayScale = $vals['grayScale'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubscribeLbsParam';
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
			
			
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
			}
			
			
			
			
			if ("grayScale" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->grayScale); 
				
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
		
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grayScale !== null) {
			
			$xfer += $output->writeFieldBegin('grayScale');
			$xfer += $output->writeI32($this->grayScale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>