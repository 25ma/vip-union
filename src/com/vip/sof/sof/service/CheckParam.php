<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class CheckParam {
	
	static $_TSPEC;
	public $count = null;
	public $startDate = null;
	public $endDate = null;
	public $addDay = null;
	public $addEndDay = null;
	public $signType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'count'
			),
			2 => array(
			'var' => 'startDate'
			),
			3 => array(
			'var' => 'endDate'
			),
			4 => array(
			'var' => 'addDay'
			),
			5 => array(
			'var' => 'addEndDay'
			),
			6 => array(
			'var' => 'signType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
			if (isset($vals['endDate'])){
				
				$this->endDate = $vals['endDate'];
			}
			
			
			if (isset($vals['addDay'])){
				
				$this->addDay = $vals['addDay'];
			}
			
			
			if (isset($vals['addEndDay'])){
				
				$this->addEndDay = $vals['addEndDay'];
			}
			
			
			if (isset($vals['signType'])){
				
				$this->signType = $vals['signType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckParam';
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
			
			
			
			
			if ("startDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startDate);
				
			}
			
			
			
			
			if ("endDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endDate);
				
			}
			
			
			
			
			if ("addDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addDay);
				
			}
			
			
			
			
			if ("addEndDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addEndDay);
				
			}
			
			
			
			
			if ("signType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->signType); 
				
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
		
		
		if($this->startDate !== null) {
			
			$xfer += $output->writeFieldBegin('startDate');
			$xfer += $output->writeString($this->startDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDate !== null) {
			
			$xfer += $output->writeFieldBegin('endDate');
			$xfer += $output->writeString($this->endDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addDay !== null) {
			
			$xfer += $output->writeFieldBegin('addDay');
			$xfer += $output->writeString($this->addDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addEndDay !== null) {
			
			$xfer += $output->writeFieldBegin('addEndDay');
			$xfer += $output->writeString($this->addEndDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('signType');
		$xfer += $output->writeByte($this->signType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>