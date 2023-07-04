<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AcceptResult {
	
	static $_TSPEC;
	public $accept_batch_no = null;
	public $result = null;
	public $result_message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'accept_batch_no'
			),
			2 => array(
			'var' => 'result'
			),
			3 => array(
			'var' => 'result_message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['accept_batch_no'])){
				
				$this->accept_batch_no = $vals['accept_batch_no'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['result_message'])){
				
				$this->result_message = $vals['result_message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("accept_batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accept_batch_no);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->result); 
				
			}
			
			
			
			
			if ("result_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_message);
				
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
		
		if($this->accept_batch_no !== null) {
			
			$xfer += $output->writeFieldBegin('accept_batch_no');
			$xfer += $output->writeString($this->accept_batch_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeI32($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_message !== null) {
			
			$xfer += $output->writeFieldBegin('result_message');
			$xfer += $output->writeString($this->result_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>