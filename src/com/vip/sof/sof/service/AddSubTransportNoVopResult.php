<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sof\sof\service;

class AddSubTransportNoVopResult {
	
	static $_TSPEC;
	public $op_result = null;
	public $sub_transport_no = null;
	public $error_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'op_result'
			),
			2 => array(
			'var' => 'sub_transport_no'
			),
			3 => array(
			'var' => 'error_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['op_result'])){
				
				$this->op_result = $vals['op_result'];
			}
			
			
			if (isset($vals['sub_transport_no'])){
				
				$this->sub_transport_no = $vals['sub_transport_no'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddSubTransportNoVopResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("op_result" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->op_result); 
				
			}
			
			
			
			
			if ("sub_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_transport_no);
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
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
		
		if($this->op_result !== null) {
			
			$xfer += $output->writeFieldBegin('op_result');
			$xfer += $output->writeByte($this->op_result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('sub_transport_no');
			$xfer += $output->writeString($this->sub_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>