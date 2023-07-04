<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\order\jit\service\order;

class JitOrderSerialNoParam {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vip_delivery_no = null;
	public $po = null;
	public $pick_no = null;
	public $out_time_begin = null;
	public $out_time_end = null;
	public $page_size = null;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vip_delivery_no'
			),
			3 => array(
			'var' => 'po'
			),
			4 => array(
			'var' => 'pick_no'
			),
			5 => array(
			'var' => 'out_time_begin'
			),
			6 => array(
			'var' => 'out_time_end'
			),
			7 => array(
			'var' => 'page_size'
			),
			8 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
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
			
			
			if (isset($vals['out_time_begin'])){
				
				$this->out_time_begin = $vals['out_time_begin'];
			}
			
			
			if (isset($vals['out_time_end'])){
				
				$this->out_time_end = $vals['out_time_end'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'JitOrderSerialNoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
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
			
			
			
			
			if ("out_time_begin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->out_time_begin); 
				
			}
			
			
			
			
			if ("out_time_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->out_time_end); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('out_time_begin');
		$xfer += $output->writeI64($this->out_time_begin);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_time_end');
		$xfer += $output->writeI64($this->out_time_end);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>