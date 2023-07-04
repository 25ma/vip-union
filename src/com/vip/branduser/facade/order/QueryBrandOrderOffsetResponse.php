<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\branduser\facade\order;

class QueryBrandOrderOffsetResponse {
	
	static $_TSPEC;
	public $code = null;
	public $message = null;
	public $brand_identify = null;
	public $start_index = null;
	public $end_index = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'message'
			),
			3 => array(
			'var' => 'brand_identify'
			),
			4 => array(
			'var' => 'start_index'
			),
			5 => array(
			'var' => 'end_index'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['brand_identify'])){
				
				$this->brand_identify = $vals['brand_identify'];
			}
			
			
			if (isset($vals['start_index'])){
				
				$this->start_index = $vals['start_index'];
			}
			
			
			if (isset($vals['end_index'])){
				
				$this->end_index = $vals['end_index'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryBrandOrderOffsetResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("brand_identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_identify);
				
			}
			
			
			
			
			if ("start_index" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_index); 
				
			}
			
			
			
			
			if ("end_index" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_index); 
				
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
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeString($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_identify !== null) {
			
			$xfer += $output->writeFieldBegin('brand_identify');
			$xfer += $output->writeString($this->brand_identify);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_index !== null) {
			
			$xfer += $output->writeFieldBegin('start_index');
			$xfer += $output->writeI64($this->start_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_index !== null) {
			
			$xfer += $output->writeFieldBegin('end_index');
			$xfer += $output->writeI64($this->end_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>