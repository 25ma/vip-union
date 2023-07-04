<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tms\vop\service;

class WaybillBalanceQueryResponseDetail {
	
	static $_TSPEC;
	public $recharge_count = null;
	public $available_count = null;
	public $cancelled_count = null;
	public $recycled_quantity = null;
	public $allocated_quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'recharge_count'
			),
			2 => array(
			'var' => 'available_count'
			),
			3 => array(
			'var' => 'cancelled_count'
			),
			4 => array(
			'var' => 'recycled_quantity'
			),
			5 => array(
			'var' => 'allocated_quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['recharge_count'])){
				
				$this->recharge_count = $vals['recharge_count'];
			}
			
			
			if (isset($vals['available_count'])){
				
				$this->available_count = $vals['available_count'];
			}
			
			
			if (isset($vals['cancelled_count'])){
				
				$this->cancelled_count = $vals['cancelled_count'];
			}
			
			
			if (isset($vals['recycled_quantity'])){
				
				$this->recycled_quantity = $vals['recycled_quantity'];
			}
			
			
			if (isset($vals['allocated_quantity'])){
				
				$this->allocated_quantity = $vals['allocated_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillBalanceQueryResponseDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("recharge_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recharge_count);
				
			}
			
			
			
			
			if ("available_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->available_count);
				
			}
			
			
			
			
			if ("cancelled_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancelled_count);
				
			}
			
			
			
			
			if ("recycled_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recycled_quantity);
				
			}
			
			
			
			
			if ("allocated_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allocated_quantity);
				
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
		
		if($this->recharge_count !== null) {
			
			$xfer += $output->writeFieldBegin('recharge_count');
			$xfer += $output->writeString($this->recharge_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->available_count !== null) {
			
			$xfer += $output->writeFieldBegin('available_count');
			$xfer += $output->writeString($this->available_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelled_count !== null) {
			
			$xfer += $output->writeFieldBegin('cancelled_count');
			$xfer += $output->writeString($this->cancelled_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recycled_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('recycled_quantity');
			$xfer += $output->writeString($this->recycled_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocated_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('allocated_quantity');
			$xfer += $output->writeString($this->allocated_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>