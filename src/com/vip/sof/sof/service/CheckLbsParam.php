<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CheckLbsParam {
	
	static $_TSPEC;
	public $count = null;
	public $startDay = null;
	public $endDay = null;
	public $times = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'count'
			),
			2 => array(
			'var' => 'startDay'
			),
			3 => array(
			'var' => 'endDay'
			),
			4 => array(
			'var' => 'times'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['startDay'])){
				
				$this->startDay = $vals['startDay'];
			}
			
			
			if (isset($vals['endDay'])){
				
				$this->endDay = $vals['endDay'];
			}
			
			
			if (isset($vals['times'])){
				
				$this->times = $vals['times'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckLbsParam';
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
			
			
			
			
			if ("startDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->startDay); 
				
			}
			
			
			
			
			if ("endDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->endDay); 
				
			}
			
			
			
			
			if ("times" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->times); 
				
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
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI32($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDay !== null) {
			
			$xfer += $output->writeFieldBegin('startDay');
			$xfer += $output->writeI32($this->startDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDay !== null) {
			
			$xfer += $output->writeFieldBegin('endDay');
			$xfer += $output->writeI32($this->endDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->times !== null) {
			
			$xfer += $output->writeFieldBegin('times');
			$xfer += $output->writeI32($this->times);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>