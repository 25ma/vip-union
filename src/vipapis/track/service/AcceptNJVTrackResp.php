<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\track\service;

class AcceptNJVTrackResp {
	
	static $_TSPEC;
	public $result_code = null;
	public $result_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result_code'
			),
			2 => array(
			'var' => 'result_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result_code'])){
				
				$this->result_code = $vals['result_code'];
			}
			
			
			if (isset($vals['result_msg'])){
				
				$this->result_msg = $vals['result_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AcceptNJVTrackResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->result_code); 
				
			}
			
			
			
			
			if ("result_msg" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->result_msg); 
				
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
		
		if($this->result_code !== null) {
			
			$xfer += $output->writeFieldBegin('result_code');
			$xfer += $output->writeI32($this->result_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_msg !== null) {
			
			$xfer += $output->writeFieldBegin('result_msg');
			$xfer += $output->writeI32($this->result_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>