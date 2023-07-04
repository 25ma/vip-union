<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service\shipReset;

class GetShipResetWorkflowVopResp {
	
	static $_TSPEC;
	public $workflow_sn = null;
	public $order_sn = null;
	public $status = null;
	public $status_desc = null;
	public $update_time = null;
	public $reject_remark = null;
	public $request_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workflow_sn'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'status_desc'
			),
			5 => array(
			'var' => 'update_time'
			),
			6 => array(
			'var' => 'reject_remark'
			),
			7 => array(
			'var' => 'request_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workflow_sn'])){
				
				$this->workflow_sn = $vals['workflow_sn'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['status_desc'])){
				
				$this->status_desc = $vals['status_desc'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['reject_remark'])){
				
				$this->reject_remark = $vals['reject_remark'];
			}
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetShipResetWorkflowVopResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("workflow_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflow_sn);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("status_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_desc);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("reject_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reject_remark);
				
			}
			
			
			
			
			if ("request_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_id);
				
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
		
		if($this->workflow_sn !== null) {
			
			$xfer += $output->writeFieldBegin('workflow_sn');
			$xfer += $output->writeString($this->workflow_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status_desc !== null) {
			
			$xfer += $output->writeFieldBegin('status_desc');
			$xfer += $output->writeString($this->status_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reject_remark !== null) {
			
			$xfer += $output->writeFieldBegin('reject_remark');
			$xfer += $output->writeString($this->reject_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->request_id !== null) {
			
			$xfer += $output->writeFieldBegin('request_id');
			$xfer += $output->writeString($this->request_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>