<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class VisitHourOptionDTO {
	
	static $_TSPEC;
	public $suggestTimeFlag = null;
	public $timeStr = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'suggestTimeFlag'
			),
			2 => array(
			'var' => 'timeStr'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['suggestTimeFlag'])){
				
				$this->suggestTimeFlag = $vals['suggestTimeFlag'];
			}
			
			
			if (isset($vals['timeStr'])){
				
				$this->timeStr = $vals['timeStr'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VisitHourOptionDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("suggestTimeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->suggestTimeFlag); 
				
			}
			
			
			
			
			if ("timeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeStr);
				
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
		
		if($this->suggestTimeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('suggestTimeFlag');
			$xfer += $output->writeI32($this->suggestTimeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeStr !== null) {
			
			$xfer += $output->writeFieldBegin('timeStr');
			$xfer += $output->writeString($this->timeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>