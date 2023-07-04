<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service\shipReset;

class CreateShipResetWorkflowVopResp {
	
	static $_TSPEC;
	public $result = null;
	public $request_id = null;
	public $workflow_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'request_id'
			),
			3 => array(
			'var' => 'workflow_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
			if (isset($vals['workflow_sn'])){
				
				$this->workflow_sn = $vals['workflow_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateShipResetWorkflowVopResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \com\vip\vis\common\service\Result();
				$this->result->read($input);
				
			}
			
			
			
			
			if ("request_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_id);
				
			}
			
			
			
			
			if ("workflow_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflow_sn);
				
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_object($this->result)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->result->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->request_id !== null) {
			
			$xfer += $output->writeFieldBegin('request_id');
			$xfer += $output->writeString($this->request_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workflow_sn !== null) {
			
			$xfer += $output->writeFieldBegin('workflow_sn');
			$xfer += $output->writeString($this->workflow_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>