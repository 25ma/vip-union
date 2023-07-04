<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class PushSesFeeParam {
	
	static $_TSPEC;
	public $appName = null;
	public $dayType = null;
	public $maxCount = null;
	public $feeType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appName'
			),
			2 => array(
			'var' => 'dayType'
			),
			3 => array(
			'var' => 'maxCount'
			),
			4 => array(
			'var' => 'feeType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appName'])){
				
				$this->appName = $vals['appName'];
			}
			
			
			if (isset($vals['dayType'])){
				
				$this->dayType = $vals['dayType'];
			}
			
			
			if (isset($vals['maxCount'])){
				
				$this->maxCount = $vals['maxCount'];
			}
			
			
			if (isset($vals['feeType'])){
				
				$this->feeType = $vals['feeType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushSesFeeParam';
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
			
			
			
			
			if ("dayType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dayType); 
				
			}
			
			
			
			
			if ("maxCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxCount); 
				
			}
			
			
			
			
			if ("feeType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->feeType); 
				
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
		
		
		if($this->dayType !== null) {
			
			$xfer += $output->writeFieldBegin('dayType');
			$xfer += $output->writeI32($this->dayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxCount');
			$xfer += $output->writeI32($this->maxCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeType !== null) {
			
			$xfer += $output->writeFieldBegin('feeType');
			$xfer += $output->writeI32($this->feeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>