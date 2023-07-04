<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillContractFeedbackRequestDetail {
	
	static $_TSPEC;
	public $contract_id = null;
	public $carrier_code = null;
	public $feedback_result_code = null;
	public $feedback_result_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contract_id'
			),
			2 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'feedback_result_code'
			),
			4 => array(
			'var' => 'feedback_result_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['feedback_result_code'])){
				
				$this->feedback_result_code = $vals['feedback_result_code'];
			}
			
			
			if (isset($vals['feedback_result_msg'])){
				
				$this->feedback_result_msg = $vals['feedback_result_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillContractFeedbackRequestDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("feedback_result_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->feedback_result_code); 
				
			}
			
			
			
			
			if ("feedback_result_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feedback_result_msg);
				
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
		
		$xfer += $output->writeFieldBegin('contract_id');
		$xfer += $output->writeString($this->contract_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('feedback_result_code');
		$xfer += $output->writeI32($this->feedback_result_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->feedback_result_msg !== null) {
			
			$xfer += $output->writeFieldBegin('feedback_result_msg');
			$xfer += $output->writeString($this->feedback_result_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>