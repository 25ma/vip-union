<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class DetailInfoForVop {
	
	static $_TSPEC;
	public $warehouse = null;
	public $affect_begin_time = null;
	public $affect_end_time = null;
	public $estimate_finish_time = null;
	public $begin_batch = null;
	public $end_batch = null;
	public $estimate_finish_batch = null;
	public $delivery_no = null;
	public $po = null;
	public $delivery_system = null;
	public $actual_transport_no = null;
	public $latest_arrival_time = null;
	public $ext_col = null;
	public $destination_warehouse = null;
	public $order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'affect_begin_time'
			),
			3 => array(
			'var' => 'affect_end_time'
			),
			4 => array(
			'var' => 'estimate_finish_time'
			),
			5 => array(
			'var' => 'begin_batch'
			),
			6 => array(
			'var' => 'end_batch'
			),
			7 => array(
			'var' => 'estimate_finish_batch'
			),
			8 => array(
			'var' => 'delivery_no'
			),
			9 => array(
			'var' => 'po'
			),
			10 => array(
			'var' => 'delivery_system'
			),
			11 => array(
			'var' => 'actual_transport_no'
			),
			12 => array(
			'var' => 'latest_arrival_time'
			),
			13 => array(
			'var' => 'ext_col'
			),
			14 => array(
			'var' => 'destination_warehouse'
			),
			15 => array(
			'var' => 'order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['affect_begin_time'])){
				
				$this->affect_begin_time = $vals['affect_begin_time'];
			}
			
			
			if (isset($vals['affect_end_time'])){
				
				$this->affect_end_time = $vals['affect_end_time'];
			}
			
			
			if (isset($vals['estimate_finish_time'])){
				
				$this->estimate_finish_time = $vals['estimate_finish_time'];
			}
			
			
			if (isset($vals['begin_batch'])){
				
				$this->begin_batch = $vals['begin_batch'];
			}
			
			
			if (isset($vals['end_batch'])){
				
				$this->end_batch = $vals['end_batch'];
			}
			
			
			if (isset($vals['estimate_finish_batch'])){
				
				$this->estimate_finish_batch = $vals['estimate_finish_batch'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['delivery_system'])){
				
				$this->delivery_system = $vals['delivery_system'];
			}
			
			
			if (isset($vals['actual_transport_no'])){
				
				$this->actual_transport_no = $vals['actual_transport_no'];
			}
			
			
			if (isset($vals['latest_arrival_time'])){
				
				$this->latest_arrival_time = $vals['latest_arrival_time'];
			}
			
			
			if (isset($vals['ext_col'])){
				
				$this->ext_col = $vals['ext_col'];
			}
			
			
			if (isset($vals['destination_warehouse'])){
				
				$this->destination_warehouse = $vals['destination_warehouse'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DetailInfoForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("affect_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->affect_begin_time);
				
			}
			
			
			
			
			if ("affect_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->affect_end_time);
				
			}
			
			
			
			
			if ("estimate_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimate_finish_time);
				
			}
			
			
			
			
			if ("begin_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->begin_batch);
				
			}
			
			
			
			
			if ("end_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_batch);
				
			}
			
			
			
			
			if ("estimate_finish_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimate_finish_batch);
				
			}
			
			
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("delivery_system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_system);
				
			}
			
			
			
			
			if ("actual_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_transport_no);
				
			}
			
			
			
			
			if ("latest_arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latest_arrival_time);
				
			}
			
			
			
			
			if ("ext_col" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_col);
				
			}
			
			
			
			
			if ("destination_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destination_warehouse);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
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
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->affect_begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('affect_begin_time');
			$xfer += $output->writeString($this->affect_begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->affect_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('affect_end_time');
			$xfer += $output->writeString($this->affect_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimate_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_finish_time');
			$xfer += $output->writeString($this->estimate_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->begin_batch !== null) {
			
			$xfer += $output->writeFieldBegin('begin_batch');
			$xfer += $output->writeString($this->begin_batch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_batch !== null) {
			
			$xfer += $output->writeFieldBegin('end_batch');
			$xfer += $output->writeString($this->end_batch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimate_finish_batch !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_finish_batch');
			$xfer += $output->writeString($this->estimate_finish_batch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_system !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_system');
			$xfer += $output->writeString($this->delivery_system);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('actual_transport_no');
			$xfer += $output->writeString($this->actual_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latest_arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('latest_arrival_time');
			$xfer += $output->writeString($this->latest_arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_col !== null) {
			
			$xfer += $output->writeFieldBegin('ext_col');
			$xfer += $output->writeString($this->ext_col);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destination_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('destination_warehouse');
			$xfer += $output->writeString($this->destination_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>