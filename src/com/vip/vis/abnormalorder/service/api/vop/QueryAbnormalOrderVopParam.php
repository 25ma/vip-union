<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\abnormalorder\service\api\vop;

class QueryAbnormalOrderVopParam {
	
	static $_TSPEC;
	public $type = null;
	public $vendor_id = null;
	public $id = null;
	public $status = null;
	public $abnormal_order_sn = null;
	public $delivery_warehouse = null;
	public $shop_code = null;
	public $less_create_time = null;
	public $greater_create_time = null;
	public $less_update_time = null;
	public $greater_update_time = null;
	public $page_no = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'id'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'abnormal_order_sn'
			),
			7 => array(
			'var' => 'delivery_warehouse'
			),
			8 => array(
			'var' => 'shop_code'
			),
			9 => array(
			'var' => 'less_create_time'
			),
			10 => array(
			'var' => 'greater_create_time'
			),
			11 => array(
			'var' => 'less_update_time'
			),
			12 => array(
			'var' => 'greater_update_time'
			),
			13 => array(
			'var' => 'page_no'
			),
			14 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['abnormal_order_sn'])){
				
				$this->abnormal_order_sn = $vals['abnormal_order_sn'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['shop_code'])){
				
				$this->shop_code = $vals['shop_code'];
			}
			
			
			if (isset($vals['less_create_time'])){
				
				$this->less_create_time = $vals['less_create_time'];
			}
			
			
			if (isset($vals['greater_create_time'])){
				
				$this->greater_create_time = $vals['greater_create_time'];
			}
			
			
			if (isset($vals['less_update_time'])){
				
				$this->less_update_time = $vals['less_update_time'];
			}
			
			
			if (isset($vals['greater_update_time'])){
				
				$this->greater_update_time = $vals['greater_update_time'];
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
		
		return 'QueryAbnormalOrderVopParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$this->status = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->status[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("abnormal_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->abnormal_order_sn);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("shop_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shop_code);
				
			}
			
			
			
			
			if ("less_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->less_create_time);
				
			}
			
			
			
			
			if ("greater_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greater_create_time);
				
			}
			
			
			
			
			if ("less_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->less_update_time);
				
			}
			
			
			
			
			if ("greater_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greater_update_time);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			if (!is_array($this->status)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->status as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->abnormal_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('abnormal_order_sn');
			$xfer += $output->writeString($this->abnormal_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shop_code !== null) {
			
			$xfer += $output->writeFieldBegin('shop_code');
			$xfer += $output->writeString($this->shop_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->less_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('less_create_time');
			$xfer += $output->writeString($this->less_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greater_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('greater_create_time');
			$xfer += $output->writeString($this->greater_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->less_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('less_update_time');
			$xfer += $output->writeString($this->less_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->greater_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('greater_update_time');
			$xfer += $output->writeString($this->greater_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page_no');
		$xfer += $output->writeI32($this->page_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>