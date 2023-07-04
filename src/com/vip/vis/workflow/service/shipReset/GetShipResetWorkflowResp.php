<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\workflow\service\shipReset;

class GetShipResetWorkflowResp {
	
	static $_TSPEC;
	public $workflowSn = null;
	public $orderSn = null;
	public $status = null;
	public $statusDesc = null;
	public $updateTime = null;
	public $rejectRemark = null;
	public $requestId = null;
	public $subOrderSns = null;
	public $jitxOrderType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workflowSn'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'statusDesc'
			),
			5 => array(
			'var' => 'updateTime'
			),
			6 => array(
			'var' => 'rejectRemark'
			),
			7 => array(
			'var' => 'requestId'
			),
			8 => array(
			'var' => 'subOrderSns'
			),
			9 => array(
			'var' => 'jitxOrderType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workflowSn'])){
				
				$this->workflowSn = $vals['workflowSn'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['statusDesc'])){
				
				$this->statusDesc = $vals['statusDesc'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['rejectRemark'])){
				
				$this->rejectRemark = $vals['rejectRemark'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['subOrderSns'])){
				
				$this->subOrderSns = $vals['subOrderSns'];
			}
			
			
			if (isset($vals['jitxOrderType'])){
				
				$this->jitxOrderType = $vals['jitxOrderType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetShipResetWorkflowResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("workflowSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflowSn);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("statusDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusDesc);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("rejectRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rejectRemark);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("subOrderSns" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSns);
				
			}
			
			
			
			
			if ("jitxOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jitxOrderType);
				
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
		
		if($this->workflowSn !== null) {
			
			$xfer += $output->writeFieldBegin('workflowSn');
			$xfer += $output->writeString($this->workflowSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusDesc !== null) {
			
			$xfer += $output->writeFieldBegin('statusDesc');
			$xfer += $output->writeString($this->statusDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rejectRemark !== null) {
			
			$xfer += $output->writeFieldBegin('rejectRemark');
			$xfer += $output->writeString($this->rejectRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSns !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSns');
			$xfer += $output->writeString($this->subOrderSns);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jitxOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('jitxOrderType');
			$xfer += $output->writeString($this->jitxOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>