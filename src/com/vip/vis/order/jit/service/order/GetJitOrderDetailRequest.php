<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\order;

class GetJitOrderDetailRequest {
	
	static $_TSPEC;
	public $system = null;
	public $vendor_id = null;
	public $update_time_start = null;
	public $update_time_end = null;
	public $po = null;
	public $pick_no = null;
	public $vip_delivery_no = null;
	public $order_sn = null;
	public $stat = null;
	public $page_no = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'system'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'update_time_start'
			),
			4 => array(
			'var' => 'update_time_end'
			),
			5 => array(
			'var' => 'po'
			),
			6 => array(
			'var' => 'pick_no'
			),
			7 => array(
			'var' => 'vip_delivery_no'
			),
			8 => array(
			'var' => 'order_sn'
			),
			9 => array(
			'var' => 'stat'
			),
			10 => array(
			'var' => 'page_no'
			),
			11 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['system'])){
				
				$this->system = $vals['system'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['update_time_start'])){
				
				$this->update_time_start = $vals['update_time_start'];
			}
			
			
			if (isset($vals['update_time_end'])){
				
				$this->update_time_end = $vals['update_time_end'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['vip_delivery_no'])){
				
				$this->vip_delivery_no = $vals['vip_delivery_no'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['stat'])){
				
				$this->stat = $vals['stat'];
			}
			
			
			if (isset($vals['page_no'])){
				
				$this->page_no = $vals['page_no'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetJitOrderDetailRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->system);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("update_time_start" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time_start); 
				
			}
			
			
			
			
			if ("update_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time_end); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("pick_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_no);
				
			}
			
			
			
			
			if ("vip_delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_delivery_no);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("stat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stat);
				
			}
			
			
			
			
			if ("page_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_no); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
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
		
		$xfer += $output->writeFieldBegin('system');
		$xfer += $output->writeString($this->system);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->update_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('update_time_start');
			$xfer += $output->writeI64($this->update_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('update_time_end');
			$xfer += $output->writeI64($this->update_time_end);
			
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
		
		
		if($this->vip_delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('vip_delivery_no');
			$xfer += $output->writeString($this->vip_delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stat !== null) {
			
			$xfer += $output->writeFieldBegin('stat');
			$xfer += $output->writeString($this->stat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_no !== null) {
			
			$xfer += $output->writeFieldBegin('page_no');
			$xfer += $output->writeI32($this->page_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>