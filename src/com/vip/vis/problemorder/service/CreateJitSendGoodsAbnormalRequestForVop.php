<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\problemorder\service;

class CreateJitSendGoodsAbnormalRequestForVop {
	
	static $_TSPEC;
	public $category1_id = null;
	public $category2_id = null;
	public $category3_id = null;
	public $po = null;
	public $warehouse = null;
	public $delivery_system = null;
	public $affect_begin_time = null;
	public $affect_end_time = null;
	public $begin_batch = null;
	public $end_batch = null;
	public $estimate_finish_time = null;
	public $estimate_finish_batch = null;
	public $remark = null;
	public $destination_warehouse = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'category1_id'
			),
			2 => array(
			'var' => 'category2_id'
			),
			3 => array(
			'var' => 'category3_id'
			),
			4 => array(
			'var' => 'po'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'delivery_system'
			),
			7 => array(
			'var' => 'affect_begin_time'
			),
			8 => array(
			'var' => 'affect_end_time'
			),
			9 => array(
			'var' => 'begin_batch'
			),
			10 => array(
			'var' => 'end_batch'
			),
			11 => array(
			'var' => 'estimate_finish_time'
			),
			12 => array(
			'var' => 'estimate_finish_batch'
			),
			13 => array(
			'var' => 'remark'
			),
			15 => array(
			'var' => 'destination_warehouse'
			),
			16 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['category1_id'])){
				
				$this->category1_id = $vals['category1_id'];
			}
			
			
			if (isset($vals['category2_id'])){
				
				$this->category2_id = $vals['category2_id'];
			}
			
			
			if (isset($vals['category3_id'])){
				
				$this->category3_id = $vals['category3_id'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_system'])){
				
				$this->delivery_system = $vals['delivery_system'];
			}
			
			
			if (isset($vals['affect_begin_time'])){
				
				$this->affect_begin_time = $vals['affect_begin_time'];
			}
			
			
			if (isset($vals['affect_end_time'])){
				
				$this->affect_end_time = $vals['affect_end_time'];
			}
			
			
			if (isset($vals['begin_batch'])){
				
				$this->begin_batch = $vals['begin_batch'];
			}
			
			
			if (isset($vals['end_batch'])){
				
				$this->end_batch = $vals['end_batch'];
			}
			
			
			if (isset($vals['estimate_finish_time'])){
				
				$this->estimate_finish_time = $vals['estimate_finish_time'];
			}
			
			
			if (isset($vals['estimate_finish_batch'])){
				
				$this->estimate_finish_batch = $vals['estimate_finish_batch'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['destination_warehouse'])){
				
				$this->destination_warehouse = $vals['destination_warehouse'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateJitSendGoodsAbnormalRequestForVop';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("category1_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1_id);
				
			}
			
			
			
			
			if ("category2_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2_id);
				
			}
			
			
			
			
			if ("category3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3_id);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("delivery_system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_system);
				
			}
			
			
			
			
			if ("affect_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->affect_begin_time); 
				
			}
			
			
			
			
			if ("affect_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->affect_end_time); 
				
			}
			
			
			
			
			if ("begin_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->begin_batch);
				
			}
			
			
			
			
			if ("end_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_batch);
				
			}
			
			
			
			
			if ("estimate_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimate_finish_time); 
				
			}
			
			
			
			
			if ("estimate_finish_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimate_finish_batch);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("destination_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destination_warehouse);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
		
		$xfer += $output->writeFieldBegin('category1_id');
		$xfer += $output->writeString($this->category1_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category2_id');
		$xfer += $output->writeString($this->category2_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category3_id');
		$xfer += $output->writeString($this->category3_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_system');
		$xfer += $output->writeString($this->delivery_system);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('affect_begin_time');
		$xfer += $output->writeI64($this->affect_begin_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('affect_end_time');
		$xfer += $output->writeI64($this->affect_end_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('begin_batch');
		$xfer += $output->writeString($this->begin_batch);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_batch');
		$xfer += $output->writeString($this->end_batch);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('estimate_finish_time');
		$xfer += $output->writeI64($this->estimate_finish_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('estimate_finish_batch');
		$xfer += $output->writeString($this->estimate_finish_batch);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destination_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('destination_warehouse');
			$xfer += $output->writeString($this->destination_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>