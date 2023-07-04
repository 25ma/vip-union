<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\order;

class JitOrderSerialNoDetail {
	
	static $_TSPEC;
	public $order_sn = null;
	public $good_sn = null;
	public $qty = null;
	public $serial_no = null;
	public $vip_delivery_no = null;
	public $po = null;
	public $pick_no = null;
	public $out_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'good_sn'
			),
			3 => array(
			'var' => 'qty'
			),
			4 => array(
			'var' => 'serial_no'
			),
			5 => array(
			'var' => 'vip_delivery_no'
			),
			6 => array(
			'var' => 'po'
			),
			7 => array(
			'var' => 'pick_no'
			),
			8 => array(
			'var' => 'out_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['good_sn'])){
				
				$this->good_sn = $vals['good_sn'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['serial_no'])){
				
				$this->serial_no = $vals['serial_no'];
			}
			
			
			if (isset($vals['vip_delivery_no'])){
				
				$this->vip_delivery_no = $vals['vip_delivery_no'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitOrderSerialNoDetail';
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
			
			
			
			
			if ("good_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_sn);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_no);
				
			}
			
			
			
			
			if ("vip_delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_delivery_no);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
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
		
		
		if($this->good_sn !== null) {
			
			$xfer += $output->writeFieldBegin('good_sn');
			$xfer += $output->writeString($this->good_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial_no !== null) {
			
			$xfer += $output->writeFieldBegin('serial_no');
			$xfer += $output->writeString($this->serial_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('vip_delivery_no');
			$xfer += $output->writeString($this->vip_delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>