<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class Pack {
	
	static $_TSPEC;
	public $transportNo = null;
	public $weight = null;
	public $volume = null;
	public $status = null;
	public $result = null;
	public $weightType = null;
	public $chargedWeight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'weight'
			),
			3 => array(
			'var' => 'volume'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'result'
			),
			6 => array(
			'var' => 'weightType'
			),
			7 => array(
			'var' => 'chargedWeight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['weightType'])){
				
				$this->weightType = $vals['weightType'];
			}
			
			
			if (isset($vals['chargedWeight'])){
				
				$this->chargedWeight = $vals['chargedWeight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Pack';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result);
				
			}
			
			
			
			
			if ("weightType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weightType); 
				
			}
			
			
			
			
			if ("chargedWeight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chargedWeight);
				
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
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeString($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weightType !== null) {
			
			$xfer += $output->writeFieldBegin('weightType');
			$xfer += $output->writeI32($this->weightType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargedWeight !== null) {
			
			$xfer += $output->writeFieldBegin('chargedWeight');
			$xfer += $output->writeString($this->chargedWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>