<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\fbs\vop\service;

class BillVendorFeeSubOrderInfo {
	
	static $_TSPEC;
	public $order_sn = null;
	public $item_details = null;
	public $delivery_warehouse = null;
	public $delivery_province = null;
	public $delivery_city = null;
	public $delivery_region = null;
	public $user_address = null;
	public $order_status = null;
	public $logistics_info = null;
	public $order_date = null;
	public $pay_time = null;
	public $delivery_time = null;
	public $cancel_time = null;
	public $fee_create_date = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'item_details'
			),
			3 => array(
			'var' => 'delivery_warehouse'
			),
			4 => array(
			'var' => 'delivery_province'
			),
			5 => array(
			'var' => 'delivery_city'
			),
			6 => array(
			'var' => 'delivery_region'
			),
			7 => array(
			'var' => 'user_address'
			),
			8 => array(
			'var' => 'order_status'
			),
			9 => array(
			'var' => 'logistics_info'
			),
			10 => array(
			'var' => 'order_date'
			),
			11 => array(
			'var' => 'pay_time'
			),
			12 => array(
			'var' => 'delivery_time'
			),
			13 => array(
			'var' => 'cancel_time'
			),
			14 => array(
			'var' => 'fee_create_date'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['item_details'])){
				
				$this->item_details = $vals['item_details'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['delivery_province'])){
				
				$this->delivery_province = $vals['delivery_province'];
			}
			
			
			if (isset($vals['delivery_city'])){
				
				$this->delivery_city = $vals['delivery_city'];
			}
			
			
			if (isset($vals['delivery_region'])){
				
				$this->delivery_region = $vals['delivery_region'];
			}
			
			
			if (isset($vals['user_address'])){
				
				$this->user_address = $vals['user_address'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['logistics_info'])){
				
				$this->logistics_info = $vals['logistics_info'];
			}
			
			
			if (isset($vals['order_date'])){
				
				$this->order_date = $vals['order_date'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['cancel_time'])){
				
				$this->cancel_time = $vals['cancel_time'];
			}
			
			
			if (isset($vals['fee_create_date'])){
				
				$this->fee_create_date = $vals['fee_create_date'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillVendorFeeSubOrderInfo';
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
			
			
			
			
			if ("item_details" == $schemeField){
				
				$needSkip = false;
				
				$this->item_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\fbs\vop\service\BillVendorFeeItemDetail();
						$elem0->read($input);
						
						$this->item_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("delivery_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_province);
				
			}
			
			
			
			
			if ("delivery_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_city);
				
			}
			
			
			
			
			if ("delivery_region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_region);
				
			}
			
			
			
			
			if ("user_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_address);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("logistics_info" == $schemeField){
				
				$needSkip = false;
				
				$this->logistics_info = new \com\vip\top\fbs\vop\service\BillVendorFeeLogisticsInfo();
				$this->logistics_info->read($input);
				
			}
			
			
			
			
			if ("order_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_date);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_time);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_time);
				
			}
			
			
			
			
			if ("cancel_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cancel_time);
				
			}
			
			
			
			
			if ("fee_create_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fee_create_date);
				
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
		
		
		if($this->item_details !== null) {
			
			$xfer += $output->writeFieldBegin('item_details');
			
			if (!is_array($this->item_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->item_details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_province !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_province');
			$xfer += $output->writeString($this->delivery_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_city !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_city');
			$xfer += $output->writeString($this->delivery_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_region !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_region');
			$xfer += $output->writeString($this->delivery_region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_address !== null) {
			
			$xfer += $output->writeFieldBegin('user_address');
			$xfer += $output->writeString($this->user_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logistics_info !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_info');
			
			if (!is_object($this->logistics_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->logistics_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_date !== null) {
			
			$xfer += $output->writeFieldBegin('order_date');
			$xfer += $output->writeString($this->order_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_time !== null) {
			
			$xfer += $output->writeFieldBegin('pay_time');
			$xfer += $output->writeString($this->pay_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time');
			$xfer += $output->writeString($this->delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancel_time !== null) {
			
			$xfer += $output->writeFieldBegin('cancel_time');
			$xfer += $output->writeString($this->cancel_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fee_create_date !== null) {
			
			$xfer += $output->writeFieldBegin('fee_create_date');
			$xfer += $output->writeString($this->fee_create_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>