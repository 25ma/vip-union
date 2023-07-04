<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class OrderRefundAmountModel {
	
	static $_TSPEC;
	public $amount = null;
	public $refundAmount = null;
	public $vipOrderMonth = null;
	public $vipEffectedMonth = null;
	public $orderRefundAmount = null;
	public $averageDeductionAmount = null;
	public $deductionAmount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'amount'
			),
			1 => array(
			'var' => 'refundAmount'
			),
			2 => array(
			'var' => 'vipOrderMonth'
			),
			3 => array(
			'var' => 'vipEffectedMonth'
			),
			4 => array(
			'var' => 'orderRefundAmount'
			),
			5 => array(
			'var' => 'averageDeductionAmount'
			),
			6 => array(
			'var' => 'deductionAmount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['vipOrderMonth'])){
				
				$this->vipOrderMonth = $vals['vipOrderMonth'];
			}
			
			
			if (isset($vals['vipEffectedMonth'])){
				
				$this->vipEffectedMonth = $vals['vipEffectedMonth'];
			}
			
			
			if (isset($vals['orderRefundAmount'])){
				
				$this->orderRefundAmount = $vals['orderRefundAmount'];
			}
			
			
			if (isset($vals['averageDeductionAmount'])){
				
				$this->averageDeductionAmount = $vals['averageDeductionAmount'];
			}
			
			
			if (isset($vals['deductionAmount'])){
				
				$this->deductionAmount = $vals['deductionAmount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderRefundAmountModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("vipOrderMonth" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipOrderMonth); 
				
			}
			
			
			
			
			if ("vipEffectedMonth" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipEffectedMonth); 
				
			}
			
			
			
			
			if ("orderRefundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderRefundAmount);
				
			}
			
			
			
			
			if ("averageDeductionAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->averageDeductionAmount);
				
			}
			
			
			
			
			if ("deductionAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deductionAmount);
				
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
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipOrderMonth !== null) {
			
			$xfer += $output->writeFieldBegin('vipOrderMonth');
			$xfer += $output->writeI32($this->vipOrderMonth);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipEffectedMonth !== null) {
			
			$xfer += $output->writeFieldBegin('vipEffectedMonth');
			$xfer += $output->writeI32($this->vipEffectedMonth);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderRefundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderRefundAmount');
			$xfer += $output->writeString($this->orderRefundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->averageDeductionAmount !== null) {
			
			$xfer += $output->writeFieldBegin('averageDeductionAmount');
			$xfer += $output->writeString($this->averageDeductionAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductionAmount !== null) {
			
			$xfer += $output->writeFieldBegin('deductionAmount');
			$xfer += $output->writeString($this->deductionAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>