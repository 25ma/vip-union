<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class VisitHourOptionResponseDetail {
	
	static $_TSPEC;
	public $suggestDateFlag = null;
	public $dateStr = null;
	public $hourList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'suggestDateFlag'
			),
			2 => array(
			'var' => 'dateStr'
			),
			3 => array(
			'var' => 'hourList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['suggestDateFlag'])){
				
				$this->suggestDateFlag = $vals['suggestDateFlag'];
			}
			
			
			if (isset($vals['dateStr'])){
				
				$this->dateStr = $vals['dateStr'];
			}
			
			
			if (isset($vals['hourList'])){
				
				$this->hourList = $vals['hourList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VisitHourOptionResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("suggestDateFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->suggestDateFlag); 
				
			}
			
			
			
			
			if ("dateStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dateStr);
				
			}
			
			
			
			
			if ("hourList" == $schemeField){
				
				$needSkip = false;
				
				$this->hourList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\carrier\bizservice\VisitHourOptionDTO();
						$elem0->read($input);
						
						$this->hourList[$_size0++] = $elem0;
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
		
		if($this->suggestDateFlag !== null) {
			
			$xfer += $output->writeFieldBegin('suggestDateFlag');
			$xfer += $output->writeI32($this->suggestDateFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dateStr !== null) {
			
			$xfer += $output->writeFieldBegin('dateStr');
			$xfer += $output->writeString($this->dateStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hourList !== null) {
			
			$xfer += $output->writeFieldBegin('hourList');
			
			if (!is_array($this->hourList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->hourList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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