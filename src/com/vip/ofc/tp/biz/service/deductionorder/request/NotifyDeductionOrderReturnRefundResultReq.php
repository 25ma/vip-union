<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\ofc\tp\biz\service\deductionorder\request;

class NotifyDeductionOrderReturnRefundResultReq {
	
	static $_TSPEC;
	public $order_sn = null;
	public $refund_status = null;
	public $refund_time = null;
	public $refund_money = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'refund_status'
			),
			3 => array(
			'var' => 'refund_time'
			),
			4 => array(
			'var' => 'refund_money'
			),
			5 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['refund_status'])){
				
				$this->refund_status = $vals['refund_status'];
			}
			
			
			if (isset($vals['refund_time'])){
				
				$this->refund_time = $vals['refund_time'];
			}
			
			
			if (isset($vals['refund_money'])){
				
				$this->refund_money = $vals['refund_money'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'NotifyDeductionOrderReturnRefundResultReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("refund_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refund_status); 
				
			}
			
			
			
			
			if ("refund_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refund_time); 
				
			}
			
			
			
			
			if ("refund_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_money);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_status !== null) {
			
			$xfer += $output->writeFieldBegin('refund_status');
			$xfer += $output->writeI32($this->refund_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_time !== null) {
			
			$xfer += $output->writeFieldBegin('refund_time');
			$xfer += $output->writeI64($this->refund_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_money !== null) {
			
			$xfer += $output->writeFieldBegin('refund_money');
			$xfer += $output->writeString($this->refund_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>