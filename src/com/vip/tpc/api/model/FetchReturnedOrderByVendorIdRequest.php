<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model;

class FetchReturnedOrderByVendorIdRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $start_time = null;
	public $end_time = null;
	public $order_status = null;
	public $order_sns = null;
	public $page = null;
	public $limit = null;
	public $platform_order_sns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'start_time'
			),
			3 => array(
			'var' => 'end_time'
			),
			4 => array(
			'var' => 'order_status'
			),
			5 => array(
			'var' => 'order_sns'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			8 => array(
			'var' => 'platform_order_sns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_sns'])){
				
				$this->order_sns = $vals['order_sns'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['platform_order_sns'])){
				
				$this->platform_order_sns = $vals['platform_order_sns'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FetchReturnedOrderByVendorIdRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time); 
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time); 
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("order_sns" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sns);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("platform_order_sns" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platform_order_sns);
				
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
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_time');
			$xfer += $output->writeI64($this->start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeI64($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sns !== null) {
			
			$xfer += $output->writeFieldBegin('order_sns');
			$xfer += $output->writeString($this->order_sns);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platform_order_sns !== null) {
			
			$xfer += $output->writeFieldBegin('platform_order_sns');
			$xfer += $output->writeString($this->platform_order_sns);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>