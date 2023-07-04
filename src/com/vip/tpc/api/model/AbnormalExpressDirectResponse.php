<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class AbnormalExpressDirectResponse {
	
	static $_TSPEC;
	public $result_code = null;
	public $result_msg = null;
	public $abnormal_direct_responses = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result_code'
			),
			2 => array(
			'var' => 'result_msg'
			),
			3 => array(
			'var' => 'abnormal_direct_responses'
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
			
			
			if (isset($vals['abnormal_direct_responses'])){
				
				$this->abnormal_direct_responses = $vals['abnormal_direct_responses'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AbnormalExpressDirectResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_code);
				
			}
			
			
			
			
			if ("result_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_msg);
				
			}
			
			
			
			
			if ("abnormal_direct_responses" == $schemeField){
				
				$needSkip = false;
				
				$this->abnormal_direct_responses = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\tpc\api\model\AbnormalDirectResponse();
						$elem1->read($input);
						
						$this->abnormal_direct_responses[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
			$xfer += $output->writeString($this->result_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_msg !== null) {
			
			$xfer += $output->writeFieldBegin('result_msg');
			$xfer += $output->writeString($this->result_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormal_direct_responses !== null) {
			
			$xfer += $output->writeFieldBegin('abnormal_direct_responses');
			
			if (!is_array($this->abnormal_direct_responses)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->abnormal_direct_responses as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>