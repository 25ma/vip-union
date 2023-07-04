<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class PackModel {
	
	static $_TSPEC;
	public $transport_no = null;
	public $weight = null;
	public $volume = null;
	public $weight_type = null;
	public $charged_weight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transport_no'
			),
			2 => array(
			'var' => 'weight'
			),
			3 => array(
			'var' => 'volume'
			),
			4 => array(
			'var' => 'weight_type'
			),
			5 => array(
			'var' => 'charged_weight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['weight_type'])){
				
				$this->weight_type = $vals['weight_type'];
			}
			
			
			if (isset($vals['charged_weight'])){
				
				$this->charged_weight = $vals['charged_weight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PackModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("weight_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight_type); 
				
			}
			
			
			
			
			if ("charged_weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->charged_weight);
				
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
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeString($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeString($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight_type !== null) {
			
			$xfer += $output->writeFieldBegin('weight_type');
			$xfer += $output->writeI32($this->weight_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->charged_weight !== null) {
			
			$xfer += $output->writeFieldBegin('charged_weight');
			$xfer += $output->writeString($this->charged_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>