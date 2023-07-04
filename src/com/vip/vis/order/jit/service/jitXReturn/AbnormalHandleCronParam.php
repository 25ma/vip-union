<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\jitXReturn;

class AbnormalHandleCronParam {
	
	static $_TSPEC;
	public $count = null;
	public $handleType = null;
	public $overtimeHour = null;
	public $maxBeforeDay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'count'
			),
			2 => array(
			'var' => 'handleType'
			),
			3 => array(
			'var' => 'overtimeHour'
			),
			4 => array(
			'var' => 'maxBeforeDay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['handleType'])){
				
				$this->handleType = $vals['handleType'];
			}
			
			
			if (isset($vals['overtimeHour'])){
				
				$this->overtimeHour = $vals['overtimeHour'];
			}
			
			
			if (isset($vals['maxBeforeDay'])){
				
				$this->maxBeforeDay = $vals['maxBeforeDay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AbnormalHandleCronParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->count); 
				
			}
			
			
			
			
			if ("handleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->handleType); 
				
			}
			
			
			
			
			if ("overtimeHour" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->overtimeHour); 
				
			}
			
			
			
			
			if ("maxBeforeDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxBeforeDay); 
				
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
		
		$xfer += $output->writeFieldBegin('count');
		$xfer += $output->writeI32($this->count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('handleType');
		$xfer += $output->writeI32($this->handleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('overtimeHour');
		$xfer += $output->writeI32($this->overtimeHour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('maxBeforeDay');
		$xfer += $output->writeI32($this->maxBeforeDay);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>