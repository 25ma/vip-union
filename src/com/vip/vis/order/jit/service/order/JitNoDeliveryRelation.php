<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\order;

class JitNoDeliveryRelation {
	
	static $_TSPEC;
	public $new_order_sn = null;
	public $old_order_sn = null;
	public $good_sn = null;
	public $amount = null;
	public $po = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'new_order_sn'
			),
			2 => array(
			'var' => 'old_order_sn'
			),
			3 => array(
			'var' => 'good_sn'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'po'
			),
			6 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['new_order_sn'])){
				
				$this->new_order_sn = $vals['new_order_sn'];
			}
			
			
			if (isset($vals['old_order_sn'])){
				
				$this->old_order_sn = $vals['old_order_sn'];
			}
			
			
			if (isset($vals['good_sn'])){
				
				$this->good_sn = $vals['good_sn'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitNoDeliveryRelation';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("new_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_order_sn);
				
			}
			
			
			
			
			if ("old_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_order_sn);
				
			}
			
			
			
			
			if ("good_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_sn);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		if($this->new_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('new_order_sn');
			$xfer += $output->writeString($this->new_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->old_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('old_order_sn');
			$xfer += $output->writeString($this->old_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_sn !== null) {
			
			$xfer += $output->writeFieldBegin('good_sn');
			$xfer += $output->writeString($this->good_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>