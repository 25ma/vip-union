<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipFirstRightsActivityModel {
	
	static $_TSPEC;
	public $id = null;
	public $activityCode = null;
	public $activityConf = null;
	public $effectDays = null;
	public $startTime = null;
	public $endTime = null;
	public $rightsTimes = null;
	public $offerTag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'activityCode'
			),
			3 => array(
			'var' => 'activityConf'
			),
			4 => array(
			'var' => 'effectDays'
			),
			5 => array(
			'var' => 'startTime'
			),
			6 => array(
			'var' => 'endTime'
			),
			7 => array(
			'var' => 'rightsTimes'
			),
			8 => array(
			'var' => 'offerTag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['activityCode'])){
				
				$this->activityCode = $vals['activityCode'];
			}
			
			
			if (isset($vals['activityConf'])){
				
				$this->activityConf = $vals['activityConf'];
			}
			
			
			if (isset($vals['effectDays'])){
				
				$this->effectDays = $vals['effectDays'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['rightsTimes'])){
				
				$this->rightsTimes = $vals['rightsTimes'];
			}
			
			
			if (isset($vals['offerTag'])){
				
				$this->offerTag = $vals['offerTag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipFirstRightsActivityModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("activityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityCode);
				
			}
			
			
			
			
			if ("activityConf" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityConf);
				
			}
			
			
			
			
			if ("effectDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->effectDays); 
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("rightsTimes" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rightsTimes); 
				
			}
			
			
			
			
			if ("offerTag" == $schemeField){
				
				$needSkip = false;
				
				$this->offerTag = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->offerTag[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityCode !== null) {
			
			$xfer += $output->writeFieldBegin('activityCode');
			$xfer += $output->writeString($this->activityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityConf !== null) {
			
			$xfer += $output->writeFieldBegin('activityConf');
			$xfer += $output->writeString($this->activityConf);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectDays !== null) {
			
			$xfer += $output->writeFieldBegin('effectDays');
			$xfer += $output->writeI32($this->effectDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rightsTimes !== null) {
			
			$xfer += $output->writeFieldBegin('rightsTimes');
			$xfer += $output->writeI32($this->rightsTimes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offerTag !== null) {
			
			$xfer += $output->writeFieldBegin('offerTag');
			
			if (!is_array($this->offerTag)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->offerTag as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>